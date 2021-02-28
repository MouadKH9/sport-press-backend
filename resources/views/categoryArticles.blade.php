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
    <body class="Category">
            <div class="container">
          Category {{$category->name}} Articles:
          {{$articles->count()}} 
            @foreach ($articles as $art)
            <p>{{ $art->title }}</p>
            <p>{{ $art->text }}</p>
            @endforeach
            </div>

            <div class="all-cats">
                All categories :
                @foreach ($categories as $cat)
                <p>{{ $cat->name }}</p>
                @endforeach
            </div>

    </body>
</html>
