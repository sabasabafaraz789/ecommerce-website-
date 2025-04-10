<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Admins</title>
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
           
          
            <th>Name</th>
          
            <th>Email</th>
           
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user ->name}}</td>
             
                <td>{{ $user->email}}</td>
              
               
                

                <td>
    
                    
                 
                    <a href="{{ url('/admin/editusers',$user->id) }}" class="btn btn-primary">edit</a>
                  

                  
                    <a href="{{ url('/admin/deleteusers',$user->id) }}" class="btn btn-danger">delete</a>
                    
                </td>

            </tr>
        @endforeach

        </tbody>
    </table>
</div>

</body>
</html>
