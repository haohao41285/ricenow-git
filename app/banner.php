<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
   protected $table="banners";
   public $primaryKey="id";
   public $timestamps=false;
}
