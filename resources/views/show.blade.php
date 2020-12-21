<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Details</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body style="background-image: linear-gradient(to left, orange,yellow)">
@if (\Session::has('error'))
    <div class="alert alert-danger">
        
            {!! \Session::get('error') !!}
    
    </div>
@endif
    <h1>Product's Code : {{$product->code}}</h1>
    <h1>Product's Name : {{$product->nameproduct}}</h1>
    <h1>Product's Category : {{$product->category->category_product}}</h1>
    <h1>Product's Quantitiy : {{$product->qty}}</h1>
    <h1>Product's Price : {{$product->price}}</h1>
    <h1>Product's Desciption : {{$product->description}}</h1>
</body>
</html>