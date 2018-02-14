@extends ('layouts.admin')

@section('content')
    <div class="col-sm-3">
        <img src="{{$post->photo ? $post->photo->file : '/images/noimage.jpg'}}" alt=""class="img-responsive img-rounded">
    </div>
    <div class="row">

        {{--{!! Form::open(['method'=>'POST','action'=>'admin\PostController@store', 'files'=>true])!!}--}}
        {!! Form::model($post, ['method'=>'PATCH','action'=>['admin\PostController@update', $post->id], 'files'=>true])!!}

        <div class="form-group">
            {!! Form::label('title', 'Title:')!!}
            {!! Form::text('title',null,['class'=>'form-controll']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Category:')!!}
            {!! Form::select('category_id', [''=>'Options']+$categories, null,['class'=>'form-controll']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:')!!}
            {!! Form::file('photo_id',null,['class'=>'form-controll']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Description:')!!}
            {!! Form::textarea('body',null,['class'=>'form-controll','rows'=>3]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
        </div>



        {!!Form::close() !!}

    </div>
    <div class="row">
        @include('includes.form_errors')
    </div>
@stop
