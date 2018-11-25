<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trips extends Model
{
    //
     //table name
     public $table  = 'boattrips';
     //primary key
     public $primaryKey= 'reservationid';
     //time stamp
     public $timestamps= 'true';
}
