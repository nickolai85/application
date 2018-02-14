@extends ('layouts.admin')

@section('content')

    @if(Session::has('deleted_user'))
        <p class="bg-danger">{{session('deleted_posts')}}</p>
    @endif
    <h1> Posts  </h1>
    <table class="table">
        <thead>
        <tr>
            <th>Nr</th>
            <th>Autor</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)
            <?php $pos=1 ?>
            @foreach($posts as $post)
                <tr>
                    <td><?=$pos;?></td>
                    <td>{{$post->user->name}}</td>
                    <td><?=$post->category_id;?></td>
                    <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
                    <td>{{$post->title}}</td>
                    <td>
                        {{$post->body}}
                    </td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                    <td>
                        <a href="{{route('admin.posts.edit', $post->id)}}">
                            Update
                        </a>
                    </td>
                    <td>Delete</td>
                </tr>
                <?php $pos++ ?>

            @endforeach
        @endif

        </tbody>
    </table>
@stop
