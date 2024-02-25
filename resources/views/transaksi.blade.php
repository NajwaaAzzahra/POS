<!DOCTYPE html>
<html>
<head>
    <title>Transaksi Toko Najwa</title>
</head>
<body>
    <h1>Transaksi Toko Najwa Minggu 1 Bulan Januari 2024</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Category</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transactions as $transaction)
            <tr>
                <td>{{ $transaction['id'] }}</td>
                <td>{{ $transaction['date'] }}</td>
                <td>{{ $transaction['category'] }}</td>
                <td>{{ $transaction['product_name'] }}</td>
                <td>{{ $transaction['quantity'] }}</td>
                <td>{{ $transaction['price'] }}</td>
                <td>{{ $transaction['quantity'] * $transaction['price'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
