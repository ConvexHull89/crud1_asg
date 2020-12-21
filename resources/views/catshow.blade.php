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
    <h1>Category : {{$category->category_product}}</h1>
    <h1>The list of product in this category : </h1>
    <ul>
        @foreach( $category->products as $product)
        <div class="d-flex justify-content-between mb-2">
            <li><h3 class="">{{$product->nameproduct}}</h3></li>
            <a href="{{route('pro.show', $product->id)}}" class="btn btn-success" style="width:22%; margin-right: 500px">See Detail</a>
        </div>
        @endforeach
    </ul>
</body>
</html>