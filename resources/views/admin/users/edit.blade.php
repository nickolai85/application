@extends ('layouts.admin')

@section('content')

    <h1>Edit user</h1>
	<div class="row">


            <div class="col-sm-3">
                <img src="{{$user->photo ? $user->photo->file : '/images/noimage.jpg'}}" alt=""class="img-responsive img-rounded">
            </div>



            <div class="col-sm-9">
            {!! Form::model($user, ['method'=>'PATCH','action'=>['admin\UsersController@update', $user->id], 'files'=>true])!!}
            <div class="form-group">
                {!! Form::label('Name', 'Name:')!!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email:')!!}
                {!! Form::text('email',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('role_id', 'Role:')!!}
                {!! Form::select('role_id', $roles , null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('is_activ', 'Status:')!!}
                {!! Form::select('is_activ', array( 1 =>'Active', 0 => 'Inactive'),null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:')!!}
                {!! Form::file('photo_id', array( 1 =>'Active', 0 => 'Inactive'),null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('Name', 'Password:')!!}
                {!! Form::password('password', ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('submit', ['class'=>'btn btn-primary']) !!}
            </div>


            {!!Form::close() !!}
            </div>
    </div>

    <div class="row">
            @include('includes.form_errors')
    </div>


@stop