<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Fontawesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="row mt-5">
        <div class="col-md-8 offset-md-2">
                <a href="{{ Route('index') }}" class="btn btn-info">Index Page</a>
                <a href="{{ Route('viewproduct') }}" class="btn btn-warning">View Page</a>
                
            <table class="table">
                <tr>
                    <th>Product Serial No</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Category</th>
                    <th>Subcategory</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th colspan="2" class="text-center">Action</th>
                </tr>
                <?php $sl=1; ?>
                @foreach($products as $data)
                <tr>
                    <td>{{ $sl }}</td>
                    <td>{{ $data->pname }}</td>
                    <td>{{ $data->pdes }}</td>
                    <td>{{ $data->cat }}</td>
                    <td>{{ $data->scat }}</td>
                    <td>{{ $data->price }}</td>
                    <td>{{ $data->status }}</td>
                    <td>
                        <a href="{{ route('editproduct',$data->id) }}" class="btn btn-info btn-sm"><i class="fa-solid fa-pen-to-square "></i></a>
                    </td>
                    <td>
                        <a href="{{ route('delete',$data->id) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
                <?php $sl++; ?>
                @endforeach
            </table>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>