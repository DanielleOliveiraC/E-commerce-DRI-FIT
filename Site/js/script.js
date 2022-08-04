function Generator() {
  var g = {
    input: undefined,
    output: undefined,
    init: function(input,output) {
      g.input = document.getElementById(input);
      g.output = document.getElementById(output);
      g.input.addEventListener('click', g.generatePassword);
    },
    generatePassword: function() {
      var p = g.getPassword();
      g.outputPassword(p);
    },
    getPassword: function() {
      var dict = g.dictionary,
          subj1 = dict.subjects[Math.floor(Math.random() * dict.subjects.length)],
          verb = dict.verbs[Math.floor(Math.random() * dict.verbs.length)],
          adj = dict.adjectives[Math.floor(Math.random() * dict.adjectives.length)],
          
          
          pw = [subj1, verb, adj].join("");
      return pw;
    },
    outputPassword: function(p) {
      g.output.value = p;
    },
    dictionary: {
      subjects: ['24', '75', '95', '90', '35', '25', '93', '12', '23', '09', '53', '54', '02', '45', '65', '94', '56'],
      verbs: ['14','23','38','48','57','63','74','88','91','05'],
      adjectives: ['46','33','64','23','78','09','65','25','56','32','16','55','58','32'],
    }
  }
  return g;
}

var generator = new Generator();

generator.init('input', 'output');




jakealbaughSignature("light");