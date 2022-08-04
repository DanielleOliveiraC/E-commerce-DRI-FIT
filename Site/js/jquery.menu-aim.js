(function($) {

    $.fn.menuAim = function(opts) {
        /*Initialize menu-aim para todos os elementos da coleção jQuery*/
        this.each(function() {
            init.call(this, opts);
        });

        return this;
    };

    function init(opts) {
        var $menu = $(this),
            activeRow = null,
            mouseLocs = [],
            lastDelayLoc = null,
            timeoutId = null,
            options = $.extend({
                rowSelector: "> li",
                submenuSelector: "*",
                submenuDirection: "right",
                tolerance: 75,  /*maior = mais perdoar ao entrar no submenu*/
                enter: $.noop,
                exit: $.noop,
                activate: $.noop,
                deactivate: $.noop,
                exitMenu: $.noop
            }, opts);

        var MOUSE_LOCS_TRACKED = 3, /*número de locais de mouse anteriores para rastrear*/
            DELAY = 300;  /*ms atraso quando o usuário parece estar entrando no submenu*/

        /*Acompanhe os últimos locais do mouse*/
        var mousemoveDocument = function(e) {
                mouseLocs.push({x: e.pageX, y: e.pageY});

                if (mouseLocs.length > MOUSE_LOCS_TRACKED) {
                    mouseLocs.shift();
                }
            };

        /*Cancelar possíveis ativações de linha ao sair do menu inteiramente*/
        var mouseleaveMenu = function() {
                if (timeoutId) {
                    clearTimeout(timeoutId);
                }

                /*Se exitMenu for fornecido e retornar true, desative a linha atualmente ativa no menu exit*/
                if (options.exitMenu(this)) {
                    if (activeRow) {
                        options.deactivate(activeRow);
                    }

                    activeRow = null;
                }
            };

        /*Acione uma possível ativação de linha sempre que inserir uma nova linha*/
        var mouseenterRow = function() {
                if (timeoutId) {
                    /*Cancelar quaisquer atrasos de ativação anteriores*/
                    clearTimeout(timeoutId);
                }

                options.enter(this);
                possiblyActivate(this);
            },
            mouseleaveRow = function() {
                options.exit(this);
            };

        /*Imediatamente, ative uma linha se o usuário clicar nela*/
        var clickRow = function() {
                activate(this);
            };

        /*Ative uma linha de menu.*/
        var activate = function(row) {
                if (row == activeRow) {
                    return;
                }

                if (activeRow) {
                    options.deactivate(activeRow);
                }

                options.activate(row);
                activeRow = row;
            };

        /*Possivelmente, ativar uma linha de menu. Se o movimento do mouse indicar que ainda não devemos ativar porque o usuário pode estar tentando inserir o conteúdo de um submenu, atrase e verifique novamente mais tarde.*/
        var possiblyActivate = function(row) {
                var delay = activationDelay();

                if (delay) {
                    timeoutId = setTimeout(function() {
                        possiblyActivate(row);
                    }, delay);
                } else {
                    activate(row);
                }
            };

        /*Retorne o período de tempo que deve ser usado como um atraso antes que a linha flutuante atual seja ativada.*/
        /*Retorna 0 se a ativação ocorrer imediatamente. Caso contrário, retorna o número de milissegundos que devem ser atrasados antes de verificar novamente para ver se a linha deve ser ativada*/
        var activationDelay = function() {
                if (!activeRow || !$(activeRow).is(options.submenuSelector)) {
                    /*Se não houver outra linha de submenu ativa, vá em frente e ative imediatamente*/
                    return 0;
                }

                var offset = $menu.offset(),
                    upperLeft = {
                        x: offset.left,
                        y: offset.top - options.tolerance
                    },
                    upperRight = {
                        x: offset.left + $menu.outerWidth(),
                        y: upperLeft.y
                    },
                    lowerLeft = {
                        x: offset.left,
                        y: offset.top + $menu.outerHeight() + options.tolerance
                    },
                    lowerRight = {
                        x: offset.left + $menu.outerWidth(),
                        y: lowerLeft.y
                    },
                    loc = mouseLocs[mouseLocs.length - 1],
                    prevLoc = mouseLocs[0];

                if (!loc) {
                    return 0;
                }

                if (!prevLoc) {
                    prevLoc = loc;
                }

                if (prevLoc.x < offset.left || prevLoc.x > lowerRight.x ||
                    prevLoc.y < offset.top || prevLoc.y > lowerRight.y) {
                    /*Se a localização anterior do mouse estava fora dos limites do menu inteiro, ative imediatamente*/
                    return 0;
                }

                if (lastDelayLoc &&
                        loc.x == lastDelayLoc.x && loc.y == lastDelayLoc.y) {
                    /*Se o mouse não se moveu desde a última vez que verificamos o status de ativação, ativar imediatamente*/
                    return 0;
                }

                /*Detectar se o usuário está se movendo para o submenu atualmente ativado*/
                
                /*Se o mouse estiver indo de forma relativamente clara em direção ao conteúdo do submenu, devemos esperar e dar ao usuário mais tempo antes de ativar uma nova linha. Se o mouse estiver indo para outro lugar, podemos ativar imediatamente uma nova linha*/
				
                /*Detectamos isso calculando a inclinação formada entre a localização atual do mouse e os pontos superior / inferior direito do menu. Nós fazemos o mesmo para o local anterior do mouse. Se as inclinações da localização do mouse atual aumentarem / diminuírem adequadamente em comparação às anteriores, sabemos que o usuário está se movendo em direção ao submenu*/
                
                /*Observe que, como o eixo y aumenta à medida que o cursor se move para baixo na tela, estamos procurando a inclinação entre o cursor e o canto superior direito para diminuir ao longo do tempo e não aumentar (de forma um pouco contraintuitiva)*/
                function slope(a, b) {
                    return (b.y - a.y) / (b.x - a.x);
                };

                var decreasingCorner = upperRight,
                    increasingCorner = lowerRight;

                /*Nossas expectativas de diminuir ou aumentar os valores de declive dependem de qual direção o submenu abre em relação ao menu principal. Por padrão, se o menu abrir à direita, esperamos que a inclinação entre o cursor e o canto superior direito diminua com o tempo, conforme explicado acima. Se o submenu abrir em uma direção diferente, mudamos nossas expectativas de inclinação.*/
                if (options.submenuDirection == "left") {
                    decreasingCorner = lowerLeft;
                    increasingCorner = upperLeft;
                } else if (options.submenuDirection == "below") {
                    decreasingCorner = lowerRight;
                    increasingCorner = lowerLeft;
                } else if (options.submenuDirection == "above") {
                    decreasingCorner = upperLeft;
                    increasingCorner = upperRight;
                }

                var decreasingSlope = slope(loc, decreasingCorner),
                    increasingSlope = slope(loc, increasingCorner),
                    prevDecreasingSlope = slope(prevLoc, decreasingCorner),
                    prevIncreasingSlope = slope(prevLoc, increasingCorner);

                if (decreasingSlope < prevDecreasingSlope &&
                        increasingSlope > prevIncreasingSlope) {
                    /*O mouse está se movendo do local anterior para o submenu atualmente ativado. Atraso antes de ativar uma nova linha de menu, porque o usuário pode estar entrando no submenu*/
                    lastDelayLoc = loc;
                    return DELAY;
                }

                lastDelayLoc = null;
                return 0;
            };

        /*Conecte eventos do menu inicial*/
        $menu
            .mouseleave(mouseleaveMenu)
            .find(options.rowSelector)
                .mouseenter(mouseenterRow)
                .mouseleave(mouseleaveRow)
                .click(clickRow);

        $(document).mousemove(mousemoveDocument);

    };
})(jQuery);

