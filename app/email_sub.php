<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class email_sub extends Model
{
    protected $table='email_subs';
    public $primaryKey="id";
    public $timestamps=false;
}
