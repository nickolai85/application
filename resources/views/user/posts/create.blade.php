@extends ('layouts.userprofile')

@section('content')
    <div class="row">

        {!! Form::open(['method'=>'POST','action'=>'userprofile\PostController@store', 'files'=>true])!!}
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
            {!! Form::textarea('body',null,['class'=>'form-control my-editor','rows'=>3]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
        </div>



        {!!Form::close() !!}

    </div>
    <div class="row">
        @include('includes.form_errors')
    </div>
    {{--TinyMCE4 editor --}}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script src="{{asset('js/addedlibs.js')}}"></script>





@stop
