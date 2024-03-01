<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="/create" method="POST">
        @csrf
        <h3>Add new Book</h3>
        <div>
            <label for="">Title</label>
            <input type="text" name="title">
        </div>
        <br>
        <div>
            <label for="">Price</label>
            <input type="number" name="price">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>
