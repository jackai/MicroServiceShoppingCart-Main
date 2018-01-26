<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Hello, world!</title>
    </head>
    <body>
        <h1>商品名稱：{{$data->name}}</h1>
        <p>價錢：{{$data->price}}</p>
        <p>商品編號：{{$data->id}}</p>
    </body>
</html>
