<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $table="pictures";
    protected $fillable=['email','contact','division','description','district','thana','price','tag','pic'];
}
