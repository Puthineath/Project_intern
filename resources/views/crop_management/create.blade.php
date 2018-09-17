@extends('layouts.master')

@section('crop_create')

<div class="inner_content">
                    <!-- /inner_content_w3_agile_info-->
    <div class="inner_content_w3_agile_info">
                    <!-- /agile_top_w3_grids-->
        <div class="agile_top_w3_grids">
                
                {!! Form::open(array('url' => 'crops')) !!}
            <div class="form-group">
              
                 {!! Form::label('crop_name', ' Crop Name') !!}

                 {!! Form::text('crop_name',null,array('placeholder' => 'Crop Name','class' => 'form-control')) !!}
                  
              </div>

               
                <div class="form-group">
                    {!! Form::label('season_name', 'Season Name') !!}
                    {!! Form::text('season_name',null,array('placeholder' => 'Season Name','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('process', 'Process') !!}
                    {!! Form::text('process',null,array('placeholder' => 'Process','class' => 'form-control')) !!}
               </div>
               <div class="form-group">
                    {!! Form::label('season_manager', 'Season Manager') !!}
                    {!! Form::text('season_manager',null,array('placeholder' => 'Season Manager','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('started_date', ' Started Date') !!}
                    {!! Form::date('started_date',null,array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('end_date', ' End Date') !!}
                    {!! Form::date('end_date',null,array('class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('description', 'Description') !!}
                    {!! Form::text('description',null,array('placeholder' => 'Description','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('crop_image', 'Crop Image') !!}
                    {!! Form::text('crop_image',null,array('placeholder' => 'Crop Image','class' => 'form-control')) !!}
                </div>

                {!! Form::submit('Create Crop Detail!', array('class' => 'btn btn-success')) !!}

            {!! Form::close() !!}

            </div>
        </div>     
    </div>
</div>

@endsection

