<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class notify extends Model
{
    //
     protected $table="notification";
    protected $fillable=['email','contact','description','district','thana','name','not_id'];
}
