<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\addlist1;
use App\notify;
use Auth;
class addlistcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $user=Auth::user();
         $user->id;
        $data=addlist1::orderBy('division')->get()->where('user_id', $user->id);;
       //  $data->Where('division','LIKE','%','Dhaka','%');
          
        
        return view ('addlist',compact('data'));
    }

    public function index1(Request $request)
    {
        //
         if(Auth::check()){
        $user=Auth::user();
         $user->id;
        $data=notify::orderBy('district')->get()->where('not_id', $user->id);
       //  $data->Where('division','LIKE','%','Dhaka','%');
          
        return view ('4Notification',compact('data'));
        }
        return Redirect('/auth/register');

    }
     public function index2(Request $request)
    {
        //
        
        $data=notify::orderBy('district')->get();
       //  $data->Where('division','LIKE','%','Dhaka','%');
          
        return view ('transaction',compact('data'));
        
       

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $any_variable2=addlist1::findOrFail($id);
        return view('edit',compact('any_variable2'));

       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
 $input=$request->all();
        $data=addlist1::findOrFail($id);
        $data->update($input);
        return $input;
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $data=addlist1::findOrFail($id);
        $data->delete();
        return redirect('course2');
    }
  

}
