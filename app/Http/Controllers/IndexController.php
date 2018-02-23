<?php

namespace App\Http\Controllers;

use App\models\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('index', compact('posts'));
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Post::findOrFail($id);

        return view('post',compact('post'));
    }


}
