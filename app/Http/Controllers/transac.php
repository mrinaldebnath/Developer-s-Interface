<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\addlist1;
use App\notify;
use Auth;

class transac extends Controller
{
    //

    
    
        public function destroy($id)
    {
        //

        $data=notify::findOrFail($id);
        $data->delete();
        
    }
}
