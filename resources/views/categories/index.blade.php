@include ('layouts.header');

<body class="antialiased">
<div class="relative flex justify-center dark:text-white dark:bg-gray-800">
    <h2>Catégories des produits</h2>
    <ul>
        @foreach ($categories as $category)
            <li><a href="{{ route('category.show', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
        @endforeach
    </ul>
</div>
</body>

@include ('layouts.footer');

