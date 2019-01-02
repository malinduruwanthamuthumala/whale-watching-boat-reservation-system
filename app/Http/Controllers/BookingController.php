<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;
use Calendar;
use App\boats;
use App\trips;
use App\invoice;
use App\pricing_details;
use PDF;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[
            'first_name'=>'required',
            'lname'=>'required',
            'seats'=>'required',
            'nic'=>'required',
            'telephone'=>'required',
            'email'=>'required',
        ]);
            $pricing=pricing_details::all()->first();
            $invoice = new invoice;
            $invoice->boatid=$request->input('boat_id');
            $id=$request->input('boat_id');
            $invoice->boatownerid=$request->input('owner_id');
            $invoice->reservationid=$request->input('res_id');
            $resid=$request->input('res_id');
            $invoice->fname=$request->input('first_name');
            $invoice->lname=$request->input('lname');
            $invoice->email=$request->input('email');
            $invoice->NIC=$request->input('nic');
            $invoice->NOofseats=$request->input('seats');
            $Noofseats=$request->input('seats');
            $reservedseats=$request->input('seats');
            $invoice->payementstatus='paid';
            // $priceperhead=$pricing->price;	
            $discount=$pricing->discount;
            $boatdetails=boats::where('boatid',$id)->first();
            $boattype=$boatdetails->boattype;

            if($boattype=="luxury"){
                $pricing=pricing_details::where('pricing_plan','luxury')->first();
                $priceperhead=$pricing->price; 
                $discount=$pricing->discount;
                $initialprice=$priceperhead*$Noofseats;
                $discountedprice=$initialprice*($discount/100);
                $finalprice=$initialprice-$discountedprice;
            }
            elseif($boattype=="family"){
               $pricing=pricing_details::where('pricing_plan','family')->first(); 
                $priceperhead=$pricing->price; 
               $discount=$pricing->discount;
               $initialprice=$priceperhead*$Noofseats;
                $discountedprice=$initialprice*($discount/100);
                $finalprice=$initialprice-$discountedprice;
            }
            elseif($boattype=="Normal"){
                $pricing=pricing_details::where('pricing_plan','normal')->first(); 
                $priceperhead=$pricing->price; 
                 $discount=$pricing->discount;
                $initialprice=$priceperhead*$Noofseats;
                $discountedprice=$initialprice*($discount/100);
                 $finalprice=$initialprice-$discountedprice;
            }
            
            // $initialprice=$priceperhead*$Noofseats;
            // $discountedprice=$initialprice*$discount;
            // $finalprice=$initialprice-$discountedprice;
            $finalprice;
            $invoice->price=$finalprice;
            $invoice->telephone=$request->input('telephone');
            $trips=trips::where('reservationid', $resid)->first();

            $currently_availableseats=$trips->availableseats;
            $currently_reservedseats=$trips->reservedseats;
            $trips->availableseats=$currently_availableseats-$Noofseats;
            $trips->reservedseats=$currently_reservedseats+ $Noofseats;
            
            $invoice->save();
            $trips->update();
           
            
            $pdf=PDF::loadview('invoice',['invoice'=>$invoice,'trips'=>$trips,'finalprice'=>$finalprice,'Noofseats'=>$Noofseats]);
            View('invoice')->with('invoice',$invoice)->with('trips',$trips)->with('finalprice',$finalprice)->with('Noofseats',$Noofseats);  
           return $pdf->stream('invoice.pdf'); 
    }
    public function generateinvoice(request $invoice){
        return $invoice;
        $pdf = PDF::loadView('invoice');
        return $pdf ->stream('invoice.pdf');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $price=pricing_details::all()->first();
       $date=trips::find($id);
       return view('reservation.pricing')->with('reservationdetails',$date)->with('pricing',$price);

       
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
    }


    public function startbooking(request $request){
        return "hello world";
    }
}
