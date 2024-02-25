<html>
    <body>
        <h1>Halaman Products</h1>
        <h2>{{ $category }}</h2>
        <ul>
            @foreach ($products as $product)
                <li>{{ $product }}</li>
            @endforeach
        </ul>      
    </body>
</html>