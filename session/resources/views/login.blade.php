<?php
@if(\Illuminate\Support\Facades\Session::has('login-fail')){
<p>{{\Illuminate\Support\Facades\Session::get('login-fail')}}</p>}
@endif
@if(\Illuminate\Support\Facades\Session::has('not-login'))
    <p>{{\Illuminate\Support\Facades\Session::get('not-login')}}</p>
@endif
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

@csrf
<form action="{{ route('login') }}" method="post">
    <input type="text" name="email" placeholder="Nhap email">
    <input type="password" name="password" placeholder="Nhap mat khau">
    <button>Login</button>
</form>
{{--<form action="" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="email" placeholder="Nhap email">--}}
{{--    <input type="password" name="password" placeholder="Nhap mat khau">--}}
{{--    <button>Login</button>--}}
{{--</form>--}}

</body>
</html>
