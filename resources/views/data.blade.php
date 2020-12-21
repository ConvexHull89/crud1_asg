<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body style="background-image: linear-gradient(to left,#bfbfbf, #d9d9d9, #f2f2f2,#d9d9d9,#bfbfbf)">
@if (\Session::has('error'))
    <div class="alert alert-danger">
        
            {!! \Session::get('error') !!}
    
    </div>
@endif
<table class="table">
        <thead>
            <th>No</th>
            <th>Product's Code</th>
            <th>Product's Name</th>
            <th>Product's Category</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
            <th style="text-indent:110px">Action</th>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>

                <td>{{$loop->iteration}}</td>
                <td>{{$product->code}}</td>
                <td>{{$product->nameproduct}}</td>
                <td>{{$product->category->category_product}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                <div class="d-flex justify-content-center">
                <a href="{{route('pro.show', $product->id)}}" class="btn btn-success" style="width:22%">Detail</a>
                <a href="{{route('pro.edit', $product->id)}}"class="btn btn-primary ml-3"style="width:22%">Edit</a>
                <form action="{{route('pro.delete', $product->id)}}" class="ml-3" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="width:100%" >Delete</button>
                </form>
                </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    
    <a href="{{route('pro.create')}}" class="btn btn-primary mt-5" style="display: block; margin:auto; width: 80%">Create Product Data</a>
    <a href="{{route('cat.index')}}" class="btn btn-primary mt-2" style="display: block; margin:auto; width: 80%">Go To Category List</a>
</body>
</html>