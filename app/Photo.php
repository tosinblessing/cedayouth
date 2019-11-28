<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    // this protects the image from showing direct route
    protected $uploads ='/img/';



    protected  $fillable = [

        'name', 'path', 'size'
    ];


    public function getPathAttribute($photo){

        return $this->uploads . $photo;
    }

    
}
