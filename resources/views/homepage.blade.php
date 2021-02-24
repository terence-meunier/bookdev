<html>
<body>
@foreach ($products as $product)
    <p>This is product {{ $product->title }}</p>
@endforeach
</body>
</html>
