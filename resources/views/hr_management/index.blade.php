<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
</head>

<body>  
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
  {{session()->get('success')}}
</div>
@endif
    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Department<x/td>
            <td>Position</td>
            <td>Email</td>
            <td>Phone Number</td>
            <td>Option</td>
            
        </tr>
    </thead>
    <tbody>
    @foreach($employees as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->first_name }}</td>
            <td>{{ $value->last_name }}</td>
            <td>{{ $value->department }}</td>
             <td>{{ $value->position  }}</td>
              <td>{{ $value->email }}</td>
               <td>{{ $value->phone_number }}</td>

         <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-success" href="{{ route('employee.show',$value->id) }}">Show </a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-warning " href="{{ route('employee.edit', $value->id) }}">Edit </a>

            {!! Form::open(['method' => 'DELETE','route' => ['employee.destroy', $value->id],]) !!}
       
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-delete']) !!}
             {{-- <a class="btn btn-primary" href="{{ route('employee.createqr',$value->id) }}"> Create QR </a>
             --}}{!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{route('employee.create')}}" class="btn btn-primary">Create</a>
</body>
</html>