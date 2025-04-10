<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Hireme</title>
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
        @foreach($hireus as $hire)
            <tr>
                


                <td>
                    <img src=" {{asset($hire->image)}}" width="60px" height="60px" >

                   </td>

                <td> 
                   {{ $hire->name }}
                </td>
                <td> 
                    {{ $hire->price }}
                 </td>
                 <td> 
                    {{ $hire->old_price }}
                 </td>
                 <td> 
                    {{ $hire->off }}
                 </td>
               
                 <td> 
                    {{ $hire->discription }}
                 </td>
                
               

                <td>
                    <a href="{{url('/admin/edithireus',$hire->id)}}" class="btn btn-primary">edit</a>
                    <a  href="{{url('/admin/deletehireus',$hire->id)}}" class="btn btn-danger">delete</a>
                  
                   
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>
</div>

</body>
</html>
