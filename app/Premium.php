<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premium extends Model
{
   
     //Table Name
     protected $table = 'premium_packages';
     //Primary Key
     public $primaryKey = 'id';
     //Timestamps
     public $timestamps = true;
}
