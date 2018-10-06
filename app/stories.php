<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stories extends Model
{
    protected $table="stories";
    public $primaryKey="id";
    public $timestamps=false;
    public function gallery()
    {
    	return $this->belongsTo('App\gallery','id_gallery','id');
    }
}
