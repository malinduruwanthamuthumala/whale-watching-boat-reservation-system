<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
     //table name
     protected $table  = 'invoices';
     //primary key
     public $primaryKey= 'invoiceid';
     //time stamp
     public $timestamps= 'true';
}
