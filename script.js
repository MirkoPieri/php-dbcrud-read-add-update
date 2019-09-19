function init() {
  getData();
}

$(document).ready(init);

function getData() {
  $.ajax({
    url: 'apiGet.php',
    method: 'GET',
    success: function(data) {
      console.log(data);
      var dati = data;

      var source   = document.getElementById("entry-template").innerHTML;
      var template = Handlebars.compile(source);

       for (var i = 0; i < dati.length; i++) {
         var context = {nome: dati[i].nome, marca: dati[i].marca, prezzo: dati[i].prezzo + ' euro', scadenza: dati[i].scadenza};
         var html    = template(context);
         $('.container .product').append(html);
      }
    },
    error: function() {
      console.log('Errore');
    }
  })
}
