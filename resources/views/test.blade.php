<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('test.submit') }}" method="POST">
        <label for="username">Enter username</label><br>
        <input type="text" name="username" placeholder="Username"><br>
        <label for="password">Enter password</label><br>
        <input type="text" name="password" placeholder="Password"><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>