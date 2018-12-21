<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Transport;
use App\boats;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
      
        $usertype=auth()->user()->usertype;
        
    if( $usertype=='boat owner'){
            $id=auth()->user()->id;
            $fname=auth()->user()->fname;
            $lname=auth()->user()->lname;
            $email=auth()->user()->email;
            $boats = Boats::where('ownerid',$id)->get();
      
             if($boats==null){
                 return view('boats.create');
             }
              else{
                 return view('boatownerfunctions.index')->with('boats',$boats);
             }
         
         }
         elseif($usertype=='admin'){
             $name=auth()->user()->id;
             return view('adminfunctions.index');
             
         }
     
     
        }
    //  if( $usertype=='boat owner'){
       
  
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $boats = boats::all();
       
        return view('boats.edit')->with('boats', $boats);
    }
}