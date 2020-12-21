<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body style="background-image: linear-gradient(to right, #99bbff,indigo,violet)">
@if (\Session::has('error'))
    <div class="alert alert-danger">
        
            {!! \Session::get('error') !!}
    
    </div>
@endif
    <div class="container">
    <h1 class="text-center text-white mt-5">Update Category Product</h1>
        <div class ="d-flex align-items-center justify-content-center " style="min-height: 50vh">
    
            <form class="col-lg-6 " action="{{route('cat.update', $category->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label text-white">Product's Category</label>
                    <input class="form-control" name="category_product" type="text" placeholder="Enter Product's Category" value="{{$category->category_product}}">
                </div>
                <button type="submit" class="btn btn-success" style="width: 100%">Update</button>
            </form>

        </div>
    </div>

</body>
</html>