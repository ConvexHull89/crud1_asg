<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Details</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body style="background-image: linear-gradient(to left, orange,yellow)">
    <h1>Product : {{$category->product->nameproduct}}</h1>
    <h1>This product is the category of : {{$category->category_product}}</h1>
</body>
</html>