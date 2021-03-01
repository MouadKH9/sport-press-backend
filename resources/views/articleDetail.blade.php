<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Article</title>
    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>

<body class="article">
    <div class="container">
        Article:
        <p>{{ $article->title }}</p>
        <p>Views: {{ $article->view_count }}</p>
        <p>{{ $article->category_id }}</p>


        All Articles:
        @foreach ($articles as $article)
        <p>{{ $article->title }}</p>
        @endforeach

    </div>
</body>

</html>