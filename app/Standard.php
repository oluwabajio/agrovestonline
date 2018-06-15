<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standard extends Model
{
     //Table Name
     protected $table = 'standard_packages';
     //Primary Key
     public $primaryKey = 'id';
     //Timestamps
     public $timestamps = true;
}
