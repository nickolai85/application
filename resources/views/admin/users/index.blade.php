@extends ('layouts.admin')

@section('content')
  <h1> Users </h1>
<table class="table">
    <thead>
      <tr>
      <th>Nr</th>
        <th>Photo</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
		<th>Status</th>
        <th>Created</th>
        <th>Updated</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    @if($users)
        <?php $pos=1 ?>
        @foreach($users as $user)
      <tr>
      	<td><?=$pos;?></td>
        <td><img height="50" src="{{$user->photo ? $user->photo->file : 'No user photo'}}" alt=""></td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>
        	{{$user->is_activ== 1 ? 'Active' : 'Inactive' }}
        </td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
        <td>
          <a href="{{route('admin.users.edit', $user->id)}}">
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
