@extends ('layouts.admin')

@section('content')
    <div class="row">


        <h1>Categories</h1>
        <div class="row">
            @include('includes.form_errors')
        </div>
        <div class="form-group">
            {!! Form::model($category, ['method'=>'PATCH','action'=>['admin\CategoriesController@update', $category->id]])!!}

            <div class="form-group">
                {!! Form::label('name', 'Title:')!!}
                {!! Form::text('name',null,['class'=>'form-controll']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}
            </div>
        </div>
     @stop