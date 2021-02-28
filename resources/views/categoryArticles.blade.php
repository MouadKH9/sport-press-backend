<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sport Press</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
    <body class="Category">
        <h1>Category {{$category->name}} Articles : {{$articles->count()}} </h1> 
        <div class="container">
            @foreach ($articles as $art)
            <p>{{ $art->title }}</p>
            <p>{{ $art->text }}</p>
            @endforeach
            </div>

            {{$articles->appends(request()->input())->links()}}

            <div class="all-cats">
                All categories :
                <ul>
                    @foreach ($categories as $cat)
                        <li>{{ $cat->name }}</li>
                    @endforeach
                </ul>
                
            </div>

    </body>
</html>
