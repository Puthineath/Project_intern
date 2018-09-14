

@section('crop_create')

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
    <a href="{{route('crops.index')}}" class="btn btn-primary">BACK</a>
    
    {!! Form::open(array('url' => 'crops')) !!}
    

    <div class="form-group">
        {!! Form::label('crop_name', ' Crop Name') !!}
        {!! Form::text('crop_name') !!}
    </div>
   
    <div class="form-group">
        {!! Form::label('season_name', 'Season Name') !!}
        {!! Form::text('season_name') !!}
    </div>
    <div class="form-group">
        {!! Form::label('process', 'Process') !!}
        {!! Form::text('process') !!}
   </div>
   <div class="form-group">
        {!! Form::label('season_manager', ' Season Manager') !!}
        {!! Form::text('season_manager') !!}
    </div>
    <div class="form-group">
        {!! Form::label('started_date', ' Started Date') !!}
        {!! Form::date('started_date') !!}
    </div>
    <div class="form-group">
        {!! Form::label('end_date', ' End Date') !!}
        {!! Form::date('end_date') !!}
    </div>
    <div class="form-group">
        {!! Form::label('description', ' Description') !!}
        {!! Form::text('description') !!}
    </div>
    <div class="form-group">
        {!! Form::label('crop_image', ' Crop Image') !!}
        {!! Form::text('crop_image') !!}
    </div>

    {!! Form::submit('Create Crop Detail!', array('class' => 'btn btn-success')) !!}

{!! Form::close() !!}

</div>

</body>

</html>