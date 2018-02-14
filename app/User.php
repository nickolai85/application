<?php

namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\models\users_pictures;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','role_id', 'is_activ', 'password', 'photo_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function role()
    {
       return $this->belongsTo('App\Role');
    }



    public function getRole()
    {
            return $this->role;
    }

    public function photo(){

        return $this ->belongsTo('App\models\users_pictures');
    }


    public function isAdmin(){


        if($this->role->name=="Admin"&& $this->is_activ == 1){

            return true;

        }

        return false;




    }

    public function post(){

        return $this->hasMany('App\models\Post');

    }

}
