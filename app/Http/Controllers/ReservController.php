<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Calendar;
use App\boats;
use App\trips;

class ReservController extends Controller
{
    //
    public function index(){
        $events = [];
        $sheets=0;
        $status="ongoing";
        
        $data=trips::where('status', $status)->where('availableseats','>', $sheets)->get();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->boatname,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#f05050',
	                    'url' => "/book/$value->reservationid",
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('reservation.index', compact('calendar'));
    }
 
    public function selectlocation(Request $request){
       
        $this->validate($request,[
            'btype'=>'required',
            'location'=>'required',
            'seats'=>'required',
        ]); 
        $status="ongoing";
        $type=$request->input('btype');
        $sheets=$request->input('seats');
        $location=$request->input('location');
        $events = [];
        if($location=='all'){
            $data=trips::where('availableseats','>=', $sheets)->where('status', $status)->where('boattype',$type)->get();
        }else{
            $data= trips::where('location',$location )->where('availableseats','>=', $sheets)->where('status', $status)->where('boattype',$type)->get();
        }
       
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->boatname,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'color' => '#f05050',
	                    'url' => "/book/$value->reservationid",
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('reservation.index', compact('calendar'));
    }

    
}
