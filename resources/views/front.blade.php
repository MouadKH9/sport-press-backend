<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Front page</title>
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h3>All categories</h3>
            <ul>
            @foreach($categories as $category)
                <li>{{$category->name}}</li>
            @endforeach    
            </ul>
        </div>
    </body>
</html>
