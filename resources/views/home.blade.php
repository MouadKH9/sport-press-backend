<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sport Press</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h1 class="mb-5 text-xl	">
        All Articles:
    </h1>
    <div>
        Trier par:
        <a href="?page={{$articles->currentPage()}}&sort=id&dir=DESC">Date</a>
        <a href="?page={{$articles->currentPage()}}&sort=title&dir=ASC">AZ</a>
        <a href="?page={{$articles->currentPage()}}&sort=views&dir=DESC">Popularite</a>
    </div>
    @foreach ($articles as $article)
    <p>{{ $article->title }} - Views {{$article->view_count}}</p>
    @endforeach

    {{ $articles->appends(request()->input())->links() }}


    <h1 class="my-5 text-xl">
        Top 5 articles
    </h1>
    @foreach ($top_articles as $article)
    <p>{{ $article->title }}</p>
    @endforeach

</body>

</html>