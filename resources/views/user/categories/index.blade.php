@extends ('layouts.admin')

@section('content')
    	<div class="row">


    <h1>Categories</h1>
            <div class="row">
                @include('includes.form_errors')
            </div>
    <div class="col-sm-6">
        {!! Form::open(['method'=>'POST','action'=>'admin\CategoriesController@store'])!!}

            <div class="form-group">
                {!! Form::label('name', 'Title:')!!}
                {!! Form::text('name',null,['class'=>'form-controll']) !!}
            </div>

        	<div class="form-group">
        	{!! Form::submit('Add', ['class'=>'btn btn-primary']) !!}
        	</div>


        {!!Form::close() !!}
    </div>
    <div class="col-sm-6">
        <table class="table">
            <thead>
            <tr>
                <th>Nr</th>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Update</th>
            </tr>
            </thead>
            <?php $i=1 ?>
            @foreach($categories  as $category)

            <tr>
                <td><?php $i=1 ?></td>
                <td>{{$category->name}}</td>
                <td>{{$category->created_at ? $category->created_at->diffForHumans():'no date'}}</td>
                <td>{{$category->updated_at ? $category->updated_at->diffForHumans():'no date'}}</td>
                <td> <a href="{{route('admin.categories.edit', $category->id)}}">
                        Update
                    </a>
                </td>
            </tr>
            @endforeach

        </table>

    </div>
        </div>

@stop
