<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Category Details</title>
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="article">
            <div class="container">
          Category {{$category->name}} Articles:
          {{$articles->count()}} 
            @foreach ($articles as $art)
            <p>{{ $art->title }}</p>
            <p>{{ $art->text }}</p>
            @endforeach
            </div>
    </body>
</html>
