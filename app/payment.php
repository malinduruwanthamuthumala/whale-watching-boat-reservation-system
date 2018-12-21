<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
     //table name
     protected $table  = 'payments';
     //primary key
     public $primaryKey= 'payementid';
     //time stamp
     public $timestamps= 'true';
}
