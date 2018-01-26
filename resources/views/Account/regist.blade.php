<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Hello, world!</title>
    </head>
    <body>
        <form method="post" action="{{ route('Account.store') }}">
        {{ csrf_field() }}
        <label for="name">姓名:</label>
        <input type="text" name="name" id="name">

        <label for="email">信箱(帳號):</label>
        <input type="text" name="email" id="email">

        <label for="password">密碼:</label>
        <input type="password" name="password" id="passowrd">
        <input type="submit">
        </form>
    </body>
</html>
