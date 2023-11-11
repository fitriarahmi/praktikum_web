<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Login</h1>
    <form action="{{Route('auth.loginStore')}}" method="post">
        @csrf
        <label for="">Usename</label>
        <input type="text" name="username">
        <br>
        <label for="">Password</label>
        <input type="password" name="password">
        <br>
        <button>Login</button>
    </form>
</body>

</html>