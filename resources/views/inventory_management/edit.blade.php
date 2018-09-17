@section('inventory_edit')
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
	<title>
		
	</title>
</head>
<body>
     <a href="{{route('inventory.index')}}" class="btn btn-primary">BACK</a>

	
 {!! Form::model($inventories, ['method' => 'PATCH', 'action' => ['InventoryController@update',$inventories->id]]) !!}

    <div class="form-group">
        {!! Form::label('product_name', ' Product Name') !!}
        {!! Form::text('product_name',$inventories->product_name) !!}
    </div>
   
    <div class="form-group">
        {!! Form::label('unit_price', 'Unit Price') !!}
        {!! Form::text('unit_price',$inventories->unit_price) !!}
    </div>
    <div class="form-group">
        {!! Form::label('amount', 'Amount') !!}
        {!! Form::text('amount',$inventories->amount) !!}
   </div>
   <div class="form-group">
        {!! Form::label('total', ' Total') !!}
        {!! Form::text('total',$inventories->Total) !!}
    </div>
    <div class="form-group">
        {!! Form::label('created_date', ' Created Date') !!}
        {!! Form::date('created_date',$inventories->created_date) !!}
    </div>
    <div class="form-group">
        {!! Form::label('expired_date', ' Expired Date') !!}
        {!! Form::date('expired_date',$inventories->expired_date) !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', ' Description') !!}
        {!! Form::text('description',$inventories->description) !!}
    </div>
    <div class="form-group">
        {!! Form::label('product_image', ' Product Image') !!}
        {!! Form::text('product_image',$inventories->product_image) !!}
    </div>

    {!! Form::submit('Edit Product Detail!', array('class' => 'btn btn-success')) !!}

{!! Form::close() !!}

</div>

</body>
</html>