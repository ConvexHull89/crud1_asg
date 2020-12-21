<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
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
            <th>Category's Product</th>
            <th style="text-indent:360px">Action</th>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$category->category_product}}</td>
                <td>
                <div class="d-flex justify-content-center">
                <a href="{{route('cat.show', $category->id)}}" class="btn btn-success" style="width:15%">Detail</a>
                <a href="{{route('cat.edit',$category->id)}}"class="btn btn-primary ml-3"style="width:15%">Edit</a>
                <form action="{{route('cat.delete', $category->id)}}" class="ml-3" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="width:150%" >Delete</button>
                </form>
                </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route('cat.create')}}" class="btn btn-primary mt-5" style="display: block; margin:auto; width: 80%">Create Category</a>
    <a href="{{route('index')}}" class="btn btn-primary mt-2" style="display: block; margin:auto; width: 80%">Go To Product's List</a>
</body>
</html>