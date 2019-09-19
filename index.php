<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-Commerce</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>

    <link rel="stylesheet" href="master.css">
    <script src="script.js" charset="utf-8"></script>
  </head>
  <body>
    <main>
      <header>
        <h1>E-Commerce</h1>
      </header>

      <div class="container">
        <section class="product">

        </section>
      </div>

    </main>


    <script id="entry-template" type="text/x-handlebars-template">
      <div class="entry" data-id='{{id}}'>
        <ul>
          <li>Prodotto: <p>{{nome}}</p></li>
          <li>Marca: <p>{{marca}}</p></li>
          <li>Prezzo: <p>{{prezzo}}</p></li>
          <li>Scadenza: <p>{{scadenza}}</p></li>
        </ul>
      </div>
    </script>
  </body>
</html>
