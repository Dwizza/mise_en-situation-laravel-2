<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Login</h1>
        <form action="" method="post">
            @csrf
            <input type="email" name="email" placeholder="email" id="">
            <input type="password" name="password" placeholder="password" id="">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>