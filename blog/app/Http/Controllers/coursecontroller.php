<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Course;
use Auth;
class coursecontroller extends Controller
{
    //
    public function index(){
    	$data=Course::paginate(4);
    	return view ('55offers',compact('data'));
    }
     public function store(Request $request){
        
        $input = $request->all();
       
        Course::create($input);
        return view('5home');
        

    	
    }
     public function create(){
        if(Auth::guest){
    	return view('3Add');
    }
    }

    public function show($id){

    }
}
