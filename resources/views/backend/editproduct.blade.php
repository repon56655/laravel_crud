<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Fontawesome cdn  -->

    <!-- Bootstrap cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="row mt-5">
        <div class="col-md-6 offset-md-3">
            <form action="{{ Route('update',$product->id) }}" method="post">
                @csrf
                <div class="form-group mt-3">
                    <label for="pname">Product Name</label> 
                    <input type="text" value="{{ $product->pname }}" class="form-control" name="pname" id="pname">
                </div>
                <div class="form-group mt-3">
                    <label for="pdes">Product Description</label>
                    <input type="text" value="{{ $product->pdes }}" class="form-control" name="pdes"  id="pdes">
                </div>
                <div class="form-group mt-3">
                    <label for="cat">Product Category</label>
                    <input type="text" value="{{ $product->cat }}" class="form-control" name="cat"  id="cat">
                </div>
                <div class="form-group mt-3">
                    <label for="scat">Product Subcategory</label>
                    <input type="text" value="{{ $product->scat }}" class="form-control" name="scat" id="scat">
                </div>
                <div class="form-group mt-3">
                    <label for="price">Price</label>
                    <input type="text" value="{{ $product->price }}" class="form-control" name="price" id="price">
                </div>
                <div class="form-group mt-3">
                    <select class="form-control text-center btn btn-info" name="status">
                        <option value="0"  >-----Select Option-----</option>
                        <option value="1" @if ($product->status==1)selected @endif>Active</option>
                        <option value="2" @if ($product->status==2)selected @endif>Inactive</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <input type="submit" class="btn btn-info form-control" value="Update">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>