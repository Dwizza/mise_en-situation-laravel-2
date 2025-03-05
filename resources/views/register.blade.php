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
        <h1>Register</h1>
        <form action="" method="post">
            @csrf
            <input type="text" name="name" placeholder="name">
            <input type="email" name="email" placeholder="email">
            <select name="role" id="">
                @foreach ($Roles as $Role)
                    <option value="{{$Role->id}}">{{$Role->name}}</option>
                @endforeach
            </select>
            <input type="password" name="password" placeholder="password">
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>