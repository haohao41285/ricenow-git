<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $table="galleries";
    public $primaryKey="id";
    public $timestamps=false;
    public function stories()
    {
    	return $this->hasMany('App\stories','id_gallery','id');
    }
}
