<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boats extends Model
{
     //table name
     protected $table  = 'boats';
     //primary key
     public $primaryKey= 'boatid';
     //time stamp
     public $timestamps= 'true';
}
