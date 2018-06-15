<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newsletters extends Model
{
    //
      //Table Name
      protected $table = 'newsletters';
      //Primary Key
      public $primaryKey = 'id';
      //Timestamps
      public $timestamps = true;
}
