<!DOCTYPE html>
<html>
<head>
    <title>Anime Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        img {
            width: 100px;
            height: auto;
            border-radius: 5px;
        }
        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Anime Products</h1>
        <table>
            <thead>
                <tr>
                    <th>Anime</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($animeProducts as $anime)
                    <tr>
                        <td><img src="{{ $anime['image'] }}" alt="{{ $anime['name'] }}"></td>
                        <td>{{ $anime['author'] }}</td>
                        <td>{{ $anime['year'] }}</td>
                        <td>${{ $anime['price'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
