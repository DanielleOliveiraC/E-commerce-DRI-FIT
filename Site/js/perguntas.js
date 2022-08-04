$(document).ready(function() {
  //Menu accordion com subcategorias
  $("#menu-home li.categoria > a").click(function(e){
    //Scrolltop ao abrir o menu leva a opção para o topo
    $('html, body').animate({
        scrollTop: $(this).offset().top
    }, 1000);
    //Cancela a ação do click
    e.preventDefault();
    // Controle class da Categoria ativada, mostar o sub-menu e marca a opção aberta
    $(this).toggleClass("active").parent().toggleClass("active");
    // Verifica se tem segundo nivel
    $(this).parent().children(".subcategorias-content").slideToggle();
  });

  //Click que altera as setas de direita e para baixo do accordeon ao clicar
  $("ul.categorias-content > li.categoria").click(function(event) {

    var varActive = $(this).children("a.active").hasClass("seta-direita");
    if ( varActive == true) {
      $(this).children("a.seta-direita.active").removeClass("seta-direita").addClass("seta-baixo");
    } else{
      $(this).children("a.seta-baixo").removeClass("seta-baixo").addClass("seta-direita");
    };
  });//ul.categorias-content
});