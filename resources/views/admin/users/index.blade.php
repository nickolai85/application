@extends ('layouts.admin')

@section('content')

	<h1> Usersss </h1>



<table class="table">
    <thead>
      <tr>
      <th>Nr</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
		<th>Status</th>
        <th>Created</th>
        <th>Updated</th>
      </tr>
    </thead>
    <tbody>
    @if($users)

    @foreach($users as $user)
      <tr>
      	<td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>
        	{{$user->is_activ== 1 ? 'Active' : 'Inactive' }}

        </td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
        <td></td>
      </tr>
     @endforeach
     @endif

    </tbody>
  </table>
  @stop
