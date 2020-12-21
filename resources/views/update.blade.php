<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body style="background-image: linear-gradient(to right, #99bbff,indigo,violet)">
@if (\Session::has('error'))
    <div class="alert alert-danger">
        
            {!! \Session::get('error') !!}
    
    </div>
@endif
    <div class="container">
    <h1 class="text-center text-white mt-3">Update Product Data</h1>
        <div class ="d-flex align-items-center justify-content-center " style="min-height: 80vh">
    
            <form class="col-lg-6 " action="{{route('pro.update', $product->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="" class="form-label text-white">Product's Code</label>
                    <input class="form-control" name="code" type="text" placeholder="Enter Product's Code" value={{$product->code}}>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white">Product's Name</label>
                    <input class="form-control" name="nameproduct" type="text" placeholder="Enter Product's Name" value={{$product->nameproduct}}>
                </div>
                 <div class="mb-3">
                    <label for="" class="form-label text-white">Product's Category</label>
                    <select name="category_id" class="form-control" id="" placeholder="Select Category">
                        @foreach($categories as $category)
                            <option value="" selected disabled hidden>{{$product->category->category_product}}</option>
                            <option value="{{$category->id}}">{{$category->category_product}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white">Quantity of Product</label>
                    <input class="form-control " name="qty" type="number" placeholder="Enter Quantitiy of Product"value={{$product->qty}}>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white">Product's Price</label>
                    <input class="form-control" name="price" type="number" placeholder="Enter Product's Price"value={{$product->price}}>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-white">Product's Description</label>
                    <textarea class="form-control" name="description" id="" cols="30" rows="3" placeholder="Enter Product's Description">{{$product->description}}</textarea>
                </div>
                
                
                <button type="submit" class="btn btn-success" style="width:100%">Update</button>
            </form>

        </div>
    </div>

</body>
</html>