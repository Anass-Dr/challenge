<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <table style="border: 1px solid #000">
        <thead>
            <th>Title</th>
            <th>Price</th>
            <th>Created_At</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->price }}</td>
                    <td>{{ $book->created_At }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <br>
    <a href="/add">Add</a>
</body>

</html>
