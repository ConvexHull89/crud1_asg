<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Details</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body style="background-image: linear-gradient(to left, orange,yellow)">
    <h1>Product's Code : {{$product->code}}</h1>
    <h1>Product's Name : {{$product->nameproduct}}</h1>
    <h1>Product's Quantitiy : {{$product->qty}}</h1>
    <h1>Product's Price : {{$product->price}}</h1>
    <h1>Product's Desciption : {{$product->description}}</h1>
    <h1>This Product Refers to Category :</h1>
    <ul>
        @foreach( $product->categories as $category)
        <div class="d-flex justify-content-between mb-2">
            <li><h3 class="">{{$category->category_product}}</h3></li>
            <a href="{{route('cat.show', $category->id)}}" class="btn btn-success" style="width:22%; margin-right: 500px">See Detail</a>
        </div>
        @endforeach
    </ul>
</body>
</html>