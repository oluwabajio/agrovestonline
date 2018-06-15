<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    //Table Name
    protected $table = 'basic_packages';
    //Primary Key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
