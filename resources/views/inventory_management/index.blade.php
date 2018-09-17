@section('inventory_index')
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
    <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Unit Price</td>
            <td>Amount</td>
            <td>Total</td>
            <td>Created Date</td>
            <td>Expired Date</td>
            <td>Description</td>
            <td>Product Image</td>
            <td>Option</td>
            
        </tr>
    </thead>
    <tbody>
    @foreach($inventories as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->product_name }}</td>
            <td>{{ $value->unit_price }}</td>
            <td>{{ $value->amount }}</td>
            <td>{{ $value->total }}</td>
            <td>{{ $value->created_date }}</td>
            <td>{{ $value->expired_date }}</td>
            <td>{{ $value->description }}</td>
            <td>{{ $value->prodcut_image }}</td>
           

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-info" href="{{ route('inventory.show',$value->id) }}">Show</a>
             {{--  <a class="btn btn-info btn-sm" href="{{route('crops.show',$value->id)}}"> Show </a> --}}

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                  <a class="btn btn-success" href="{{ route('inventory.edit',$value->id) }}">Edit</a>


            {!! Form::open(['method' => 'DELETE','route' => ['inventory.destroy', $value->id],]) !!}
       
            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-delete']) !!}
            {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
   
</table>

<a href="{{route('inventory.create')}}" class="btn btn-primary">Create</a>

</body>
</html>