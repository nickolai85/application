@extends ('layouts.admin')

@section('content')

<h1>Create Users</h1>


    {!! Form::open(['method'=>'POST','action'=>'admin\UsersController@store', 'files'=>true])!!}
            <div class="form-group">
               {!! Form::label('Name', 'Name:')!!}
                {!! Form::text('name',null,['class'=>'form-controll']) !!}
            </div>
            <div class="form-group">
                    {!! Form::label('email', 'Email:')!!}
                    {!! Form::text('email',null,['class'=>'form-controll']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id', 'Role:')!!}
                {!! Form::select('role_id', [''=>'Choose Options'] + $roles , null,['class'=>'form-controll']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('is_activ', 'Status:')!!}
                {!! Form::select('is_activ', array( 1 =>'Active', 0 => 'Inactive'),null,['class'=>'form-controll']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:')!!}
                {!! Form::file('photo_id', array( 1 =>'Active', 0 => 'Inactive'),null,['class'=>'form-controll']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Name', 'Password:')!!}
                {!! Form::password('password', ['class'=>'form-controll']) !!}
            </div>
            <div class="form-group">
    	        {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
    	    </div>


    {!!Form::close() !!}
    @include('includes.form_errors')

@stop