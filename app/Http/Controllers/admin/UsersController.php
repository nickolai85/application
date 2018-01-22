<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UsersEditRequest;
use App\models\users_pictures;
use App\Role;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users= User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::lists('name','id')->all();

      //dd($roles);
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        if (trim($request->password)==''){

            $input=$request->except('password');


        } else {
            $input= $request->all();


        }

        $input=$request->all();
        //adding photos
        if($file=$request->file('photo_id')){

            $name=time().$file->getClientOriginalName();

            $file->move('images', $name);

            $photo = users_pictures::create(['file'=>$name]);

            $input['photo_id']=$photo->id;

        }
        $input['password']=bcrypt($request->getPassword());

        User::create($input);
        return redirect('/admin/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user= User::findOrFail($id);

        $roles=Role::lists('name','id')->all();

       // dd($roles);
        return view('admin.users.edit', compact('roles','user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersEditRequest $request, $id)
    {
        $user= User::findOrFail($id);

        if (trim($request->password)==''){

            $input=$request->except('password');

        } else {
            $input= $request->all();


        }
        if($file = $request->file('photo_id')){

            $name=time().$file->getClientOriginalName();
            $file->move('images', $name);

            $photo=users_pictures::create(['file'=>$name]);

            $input['photo_id']= $photo->id;

        }
        $input['password']= bcrypt($request->password);
        $user->update($input);
        //
        return redirect('/admin/users');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
