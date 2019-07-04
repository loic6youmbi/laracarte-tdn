<!DOCTYPE html>
 <html lang="fr">
     <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <title>{{ page_title($title ?? '') }}</title>

         <meta name="viewport" content="width=device-width, initial-scale=1">
         <!-- google font -->
              <style>
                @import url('https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600&display=swap');
              </style>

         <!-- font awesome -->
         <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <style>
          body{
            font-family: 'open Sans', Helvetica,Arial, sans-serif;
            margin-left: 12em;
          }
          footer{
            margin-top: 4em;
            margin-bottom: 4em;

          }
         </style>
     </head>
     <body>

       @include('layouts/includes/_navInclude')

       @yield('contenu')
       @include('layouts/includes/_footerInclude')
    <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     </body>

 </html>
