<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-primi-passi</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">




    </head>
    <body>
      <header>
        <div class="container">
          <h2>FOOTBALL CARTOON</h2>
          @include('header')
        </div>
      </header>
      <main>
        <div class="container">
          @include('main')
        </div>
      </main>
      <footer>
        <div class="container">
          @include('footer')
        </div>
      </footer>
    </body>
</html>
