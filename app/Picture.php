<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    //
   protected $table="pictures";
    protected $fillable=['email','contact','division','description','district','thana','price','tag','pic'];
}
