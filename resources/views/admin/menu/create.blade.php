@extends('admin.layout.admin')

@section('content')
    <h3>Add Product</h3>
    <div class="row">
        <div class = "col-md-8 col-md-offset-2">
            {!! Form::open(['route' =>'menu.store', 'method'=>'POST', 'files'=>true, 'data-parsley-validate'=>'']) !!}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class'=>'form-control', 'required'=>'', 'minlength'=>'5')) }}
            </div>
            <div class="form-group">
                {{ Form::label('price', 'Price') }}
                {{ Form::text('price', null, array('class'=>'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('size', 'Size') }}
                {{ Form::select('size', [''=>'','small'=>'Small', 'medium'=>'Medium', 'large'=>'Large'], null, array('class'=>'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('image', 'Image') }}
                {{ Form::file('image', array('class'=>'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::textarea('description', null, array('class'=>'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('process', 'Process Time') }}
                {{ Form::time('process', null, array('class'=>'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Create',  array('class'=>'btn btn-primary btn-lg')) }}
            </div>
            {!! Form::close() !!}
    
        </div>
    </div>

@endsection
