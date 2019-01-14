<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    //table name
     protected $table  = 'mail';
     //primary key
     public $primaryKey= 'id';
     //time stamp
     public $timestamps= 'true';
}