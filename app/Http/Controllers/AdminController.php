<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Calendar;
use App\boats;
use App\trips;
use App\invoice;
use App\payment;
use App\user;

class AdminController extends Controller
{
   public function confirmboat(){
      
   $boats=boats::where('status','waiting')->get();
   return view('adminfunctions.confirmboat')->with('boats',$boats);   
   }

   public function getmoredetails(request $request){
    $id=$request->input('id');
    $owner=$request->input('owner');
    $details=boats::where('boatid',$id)->first();
    $owner=user::where('id',$owner)->first();
    return view('adminfunctions.moredetails')->with('details',$details)->with('owner',$owner); 

   }
   public function setconfirmation(request $request){
    $id=$request->input('id');
     $details=boats::where('boatid',$id)->first();

    $details->status="confirmed";
    $details->update();
    return redirect('/confirmboat')->with('success','Boat successfully confirmed');

   }
}
