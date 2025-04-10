<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
    @if (session('success'))
    <h6 class="alert alert-warning mb-3">{{ session('success') }}</h6>  
    @endif

    <table class="table table-dark table-bordered">
        <thead>
        <tr>
           
          
            <th>Image</th>
            <th>Name</th>
            <th>price</th>
            <th>old_price</th>
            <th>off</th>
           
            <th>discription</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                


                <td>
                    <img src=" {{asset($product->image)}}" width="60px" height="60px" >

                   </td>

                <td> 
                   {{ $product->name }}
                </td>
                <td> 
                    {{ $product->price }}
                 </td>
                 <td> 
                    {{ $product->old_price }}
                 </td>
                 <td> 
                    {{ $product->off }}
                 </td>
                 
                 <td> 
                    {{ $product->discription }}
                 </td>
                
               

                <td>
                    <a href="{{url('/admin/editproducts',$product->id)}}" class="btn btn-primary">edit</a>
                    <a  href="{{url('/admin/deleteproducts',$product->id)}}" class="btn btn-danger">delete</a>
                  
                   
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>
</div>

</body>
</html>
