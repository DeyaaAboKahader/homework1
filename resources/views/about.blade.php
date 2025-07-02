<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
</head>
<body>
    <h1>Hello, {{ $name }}</h1>

    <form action="/about" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <br> <br>
        <select name="departmen" id="departmen">
            @foreach ($departments  as $key => $department)
            <option value="{{$key}}">{{$department}}</option>
            @endforeach
            <option value="2">Financial</option>
            <option value="3">Sales</option>
        </select>
        <br> <br>
        <input type="submit" value="Send">
    </form>
</body>
</html>





