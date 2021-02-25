<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
</head>
<body>
<div>
    @foreach ($products as $product)
        <article>
            <header>
                <h2><a href="{{ route('product.show', ['id' => $product->id]) }}">{{ $product->title }}</a></h2>
            </header>
            <p>{{ $product->description }}</p>
        </article>
    @endforeach
</div>
</body>
</html>
