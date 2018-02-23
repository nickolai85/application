<?php

namespace App\Http\Controllers\Auth;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role=Auth::user()->role->name;

        switch ($role){

            case 'Admin' :

                return redirect('admin/users');
                break;

            case 'User' :

                return redirect('/');
                break;

            Default :
                return redirect('/');
                break;


        }

    }


}
