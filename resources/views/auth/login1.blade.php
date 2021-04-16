<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head >
    <meta charset="utf-8">
    <title>Eventos RHR</title>
    <link rel="stylesheet" href="../../css/prueba.css">
    <link rel="shortcut icon" href="{{asset('images/logo.png')}}"/>
</head>
<body>
<div class="login">
<h1>Login</h1>
<form action="{{ route('login') }}" method="POST">
    <input type="text" name="u" placeholder="Username" required="required" />
    @error('email')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <input type="password" name="p" placeholder="Password" required="required" />
    @error('password')
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <button type="submit" class="btn btn-primary btn-block btn-large">Log In</button>
</form>
</div>



</body>
</html>




