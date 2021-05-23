<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <button><a href="{{route('products.create')}}">aggiungi un prodotto</a></button>
        <ul>
            @foreach ($products as $product)
            <li>{{$product -> name}} {{$product -> foodgroup}}</li>
            @endforeach
        </ul>
    </body>
</html>