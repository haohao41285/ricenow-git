<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stories_user extends Model
{
    protected $table="stories_users";
    public $primaryKey="id";
    public $timestamps=false;
}
