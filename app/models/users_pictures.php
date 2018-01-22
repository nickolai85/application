<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class users_pictures extends Model
{

    protected $uploads='/images/';
    protected $fillable = ['file'];

    public function getFileAttribute($photo){

        return $this->uploads.$photo;
    }
}
