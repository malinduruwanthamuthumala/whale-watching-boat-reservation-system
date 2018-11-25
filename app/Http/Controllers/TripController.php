<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Calendar;
use App\boats;
use App\trips;

class TripController extends Controller
{
    public function index(){
        $id=auth()->user()->id;
        
        $boats = Boats::where('ownerid',$id)->get();
        return view('boatownerfunctions.startnewtrip')->with('boats', $boats);
    }

    public function AddNewTrip(Request $request){
    
        $this->validate($request,[
            'start_date'=>'required',
            'end_date'=>'required',
            'location'=>'required',
            'startingtime'=>'required',
            'availableseats'=>'required',
        ]);

    // if($validator->fails()){
    //         \session::flash('warning','please fill the all required fields');
    //         return Redirect::to('/tripscreate')->withInput()->withErrors($validator);
    // }
            $trip=new trips;
            
            $trip->start_date=$request->input('start_date');
            $trip->end_date=$request->input('end_date');
            $trip->location=$request->input('location');
            $trip->startingtime=$request->input('startingtime');
            $trip->availableseats=$request->input('availableseats');
            $trip->reservedseats='0';
            $trip->boatid=$request->input('selectboat');
            $id=$request->input('selectboat');
            $name = Boats::where('boatid',$id)->first();
            
           
            $trip->boatname= $name->name;
            $trip->save();
            
          
            
            
            \Session::flash('success','Trip added succesfully');
            return redirect('/tripscreate')->with('success','trip successfully added to the calender');
            

            
            
    }

    public function OngoingTrips(){
        
        $id=auth()->user()->id;
        return $ongoing_trips=trips::where('ownerid',$id)->get();
    }
}
