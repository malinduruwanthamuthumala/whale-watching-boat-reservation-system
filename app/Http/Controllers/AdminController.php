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
use App\pricing_details;
use DB;
use App\Patient;

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

   public function set_price(){
    $price=pricing_details::all();
      return view('adminfunctions.setprice')->with('pricing',$price);
   }

   public function  update_pricing(request $request){
       $id=$request->input('id');
     
      $pricing=pricing_details::where('pricing_id',$id)->first();
      $prices=$request->input('price');
     $pricing->price=$prices;
         $pricing->update();
      

      return redirect('set_price')->with('success','pricing plan successfully updated');
   }
   public function update_discounts(request $request){
      $id=$request->input('id');
     
      $pricing=pricing_details::where('pricing_id',$id)->first();
      $discount=$request->input('discount');
     $pricing->discount=$discount;
         $pricing->update();
         return redirect('set_price')->with('success','pricing plan successfully updated');
      
   }
   public function admin_payement_info(){
       $payement=payment::orderBy('updated_at', 'desc')->paginate(6);
      return view('adminfunctions.payement_info')->with('payements',$payement);
   }
   public function searchpayement(request $request){
     $stdate=$request->input('stdate');
     $enddate=$request->input('enddate');
     $payement = DB::select("SELECT * FROM payments WHERE updated_at BETWEEN '$stdate' AND '$enddate'");
     return view('adminfunctions.payement_info_search')->with('payements',$payement);
   }

   public function payinfo(){
     $invoice=invoice::all()->pluck('price')->toArray();
      $totalcashflow=0;
      foreach($invoice as $cash){
         $totalcashflow=$totalcashflow+$cash;  
      }
      
       $cashpaid=payment::all()->pluck('payement_amount')->toArray();
       $revenue=payment::all()->pluck('revenue')->toArray();
       $totalcashpaid=0;
       $totalrevenuegained=0;
       
      foreach( $cashpaid as  $cashpaid){
      $totalcashpaid= $totalcashpaid+$cashpaid;
   }
  

   foreach( $revenue as  $revenue){
      $totalrevenuegained= $totalrevenuegained+$revenue;
   }
   
   return view('adminfunctions.cashflow')->with('totalcashflow', $totalcashflow)->with('totalrevenuegained',$totalrevenuegained)
   ->with('totalcashpaid',$totalcashpaid);
   }

   public function ongoing_reserve_admin(){
      $trips=trips::orderBy('end_date', 'desc')->paginate(6);
      return view('adminfunctions.ongoing_reserve')->with('trip',$trips);


   }
   
      function index()
      {
       return view('adminfunctions.searchboats');
      }
  
      function action(Request $request)
      {
       if($request->ajax())
       {
        $output = '';
        $query = $request->get('query');
        if($query != '')
        {
         $data = DB::table('boats')
           ->where('ownerid', 'like', '%'.$query.'%')
           ->orWhere('name', 'like', '%'.$query.'%')
           ->orWhere('location', 'like', '%'.$query.'%')
           ->orWhere('boattype', 'like', '%'.$query.'%')
           ->orWhere('boatid', 'like', '%'.$query.'%')
           ->orderBy('boatid', 'desc')
           ->get();
           
        }
        else
        {
         $data = DB::table('boats')
           ->orderBy('boatid', 'desc')
           ->get();
        }
        $total_row = $data->count();
        if($total_row > 0)
        {
         foreach($data as $row)
         {
          $output .= '
          <tr>
           <td>'.$row->boatid.'</td>
           <td>'.$row->governmentregno.'</td>
           <td>'.$row->ownerid.'</td>
           <td>'.$row->name.'</td>
           <td>'.$row->location.'</td>
           <td>'.$row->noofseats.'</td>
           <td>'.$row->phonenumber.'</td>
           <td>'.$row->noofinsuredpassengers.'</td>
           <td>'.$row->insuarancecpmpanyname.'</td>
           <td>'.$row->insuaranceregno.'</td>
           <td>'.$row->Nameofthebank.'</td>
           <td>'.$row->bankacountnumber.'</td>
          
          </tr>
          ';
         }
        }
        else
        {
         $output = '
         <tr>
          <td align="center" colspan="5">No Data Found</td>
         </tr>
         ';
        }
        $data = array(
         'table_data'  => $output,
         'total_data'  => $total_row
        );
  
        echo json_encode($data);
       }
      }
  
   }
