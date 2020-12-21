<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body style="background-image: linear-gradient(to right, red,orange, #ffcc00)">
@if (\Session::has('error'))
    <div class="alert alert-danger">
        
            {!! \Session::get('error') !!}
    
    </div>
@endif
    <div class="container">
    <h1 class="text-center text-white">Create Product Data</h1>
        <div class ="d-flex align-items-center justify-content-center " style="min-height: 80vh">
    
            <form class="col-lg-6 " action="{{route('pro.store')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label text-white">Product's Code</label>
                    <input class="form-control" name="code" type="text" placeholder="Enter Product's Code">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white">Product's Name</label>
                    <input class="form-control" name="nameproduct" type="text" placeholder="Enter Product's Name">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white">Product's Category</label>
                    <select name="category_id" class="form-control" id="" placeholder="Select Category">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->category_product}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label text-white">Quantity of Product</label>
                    <input class="form-control " name="qty" type="number" placeholder="Enter Quantitiy of Product">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white">Product's Price</label>
                    <input class="form-control" name="price" type="number" placeholder="Enter Product's Price">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white">Product's Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="3" placeholder="Enter Product's Description"></textarea>
                </div>
                
                
                <button type="submit" class="btn btn-primary" style="width: 100%">Create</button>
            </form>

        </div>
    </div>

</body>
</html>