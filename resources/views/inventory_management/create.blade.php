@extends('layouts.master')


@section('inventory_create')

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
    <br>
    <br>
    <br>
    <a href="{{route('inventory.index')}}" class="btn btn-primary">BACK</a>
    
    {!! Form::open(array('url' => 'inventory')) !!}
    

    <div class="form-group">
        {!! Form::label('product_name', ' Product Name') !!}
        {!! Form::text('product_name') !!}
    </div>
   
    <div class="form-group">
        {!! Form::label('unit_price', 'Unit Price') !!}
        {!! Form::text('unit_price') !!}
    </div>
    <div class="form-group">
        {!! Form::label('amount', 'Amount') !!}
        {!! Form::text('amount') !!}
   </div>
   <div class="form-group">
        {!! Form::label('total', ' Total') !!}
        {!! Form::text('total') !!}
    </div>
    <div class="form-group">
        {!! Form::label('created_date', ' Created Date') !!}
        {!! Form::date('created_date') !!}
    </div>
    <div class="form-group">
        {!! Form::label('expired_date', ' Expired Date') !!}
        {!! Form::date('expired_date') !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', ' Description') !!}
        {!! Form::text('description') !!}
    </div>
    <div class="form-group">
        {!! Form::label('product_image', ' Product Image') !!}
        {!! Form::text('product_image') !!}
    </div>

    {!! Form::submit('Create Product Detail!', array('class' => 'btn btn-success')) !!}

{!! Form::close() !!}

</div>

</body>
</html>