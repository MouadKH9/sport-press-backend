<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Press</title>
</head>

<body>
    All Articles:
    @foreach ($articles as $article)
    <p>{{ $article->title }}</p>
    @endforeach

</body>

</html>
