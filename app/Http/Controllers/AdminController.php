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
  
      public function earning_reports_annual(request $request){
        
       
            
            
         $year=$request->input('year');
    
            $startjan="$year-01-01";
            $endjan="$year-01-31";
           $boatstripjan = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startjan' AND '$endjan'");
            $jantotal=0;
            foreach($boatstripjan as $boatstripjan){
                $jantotal=$jantotal+$boatstripjan->payement_amount+$boatstripjan->revenue;

            }
    
    
            $startfeb="$year-02-01";
            $endfeb="$year-02-31";
            $boatstripfeb =DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startfeb' AND '$endfeb'");
            $febtotal=0;
            foreach($boatstripfeb as $boatstripfeb){
                $febtotal=$febtotal+$boatstripfeb->payement_amount+$boatstripfeb->revenue;
            }
    
            $startmarch="$year-03-01";
            $endmarch="$year-03-31";
            $boatstripmarch =DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startmarch' AND '$endmarch'");
            $marchtotal=0;
            foreach($boatstripmarch as $boatstripmarch){
                $marchtotal=$marchtotal+$boatstripmarch->payement_amount+$boatstripmarch->revenue;
            }
    
            $startapr="$year-04-01";
            $endapr="$year-04-31";
            $boatstripapr = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startapr' AND '$endapr'");
            $aprtotal=0;
            foreach($boatstripapr as $boatstripapr){
                $aprtotal=$aprtotal+$boatstripapr->payement_amount+$boatstripapr->revenue;
            }
    
            $startmay="$year-05-01";
            $endmay="$year-05-31";
            $boatstripmay = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startmay' AND '$endmay'");
            $maytotal=0;
            foreach($boatstripmay as $boatstripmay){
                $maytotal=$maytotal+$boatstripmay->payement_amount+$boatstripmay->revenue;
            }
    
           
    
            $startjune="$year-06-01";
            $endjune="$year-06-31";
            $boatstripjune = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startjune' AND '$endjune'");
            $junetotal=0;
            foreach($boatstripjune as $boatstripjune){
                $junetotal=$junetotal+$boatstripjune->payement_amount+$boatstripjune->revenue;
            }
    
            $startjul="$year-07-01";
            $endjul="$year-07-31";
           $boatstripjul = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startjul' AND '$endjul'");
            $jultotal=0;
            foreach($boatstripjul as $boatstripjul){
                $jultotal=$jultotal+$boatstripjul->payement_amount+$boatstripjul->revenue;
            }
    
            $startaug="$year-08-01";
            $endaug="$year-08-31";
            $boatstripaug =DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startaug' AND '$endaug'");
            $augtotal=0;
            foreach($boatstripaug as $boatstripaug){
                $augtotal=$augtotal+$boatstripaug->payement_amount+$boatstripaug->revenue;
            }
        
            $startsep="$year-09-01";
            $endsep="$year-09-31";
            $boatstripsep = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startsep' AND '$endsep'");
            $septotal=0;
            foreach($boatstripsep as $boatstripsep){
                $septotal=$septotal+$boatstripsep->payement_amount+$boatstripsep->revenue;
            }
    
    
            // $startoct="$year-10-01";
            // $endoct="$year-10-31";
            // $boatstripoct =collect( DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startoct' AND '$endoct'"))->where('boatowner_id',$id);
            // $octtotal=0;
            // foreach($boatstripoct as $boatstripdoct){
            //     $octtotal=$octtotal+$boatstripoct->payement_amount;
            // }
            $startoct="$year-10-01";
            $endoct="$year-10-31";
            $boatstripoct = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startoct' AND '$endoct'");
            $octtotal=0;
            foreach($boatstripoct as $boatstripoct){
                $octtotal=$octtotal+$boatstripoct->payement_amount+$boatstripoct->revenue;
            }
    
            $startnove="$year-11-01";
            $endnove="$year-12-31";
            $boatstripnove =DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startnove' AND '$endnove'");
            $novtotal=0;
            foreach($boatstripnove as $boatstripnove){
                $novtotal=$novtotal+$boatstripnove->payement_amount+$boatstripnove->revenue;
            }
    
    
    
            $startdec="$year-12-01";
            $enddec="$year-12-31";
       $boatstripdec =DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startdec' AND '$enddec'");
           
           $dectotal=0;
            foreach($boatstripdec as $boatstripdec){
                $dectotal=$dectotal+$boatstripdec->payement_amount+$boatstripdec->revenue;
            }
            
    
            return view('adminfunctions.annual_earning_display')->with('dectotal',$dectotal)->with('jantotal',$jantotal)->with('febtotal',$febtotal)->with('marchtotal',$marchtotal)
            ->with('aprtotal',$aprtotal)->with('maytotal',$maytotal)->with('junetotal',$junetotal)->with('jultotal',$jultotal)->with('augtotal',$augtotal)
            ->with('septotal',$septotal)->with('octtotal',$octtotal)->with('novtotal',$novtotal);  
        }
      
        public function earning_reports_revenue(request $request){
         $year=$request->input('year');
    
         $startjan="$year-01-01";
         $endjan="$year-01-31";
        $boatstripjan = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startjan' AND '$endjan'");
         $jantotal=0;
         foreach($boatstripjan as $boatstripjan){
             $jantotal=$jantotal+$boatstripjan->revenue;
         }
 
 
         $startfeb="$year-02-01";
         $endfeb="$year-02-31";
         $boatstripfeb =DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startfeb' AND '$endfeb'");
         $febtotal=0;
         foreach($boatstripfeb as $boatstripfeb){
             $febtotal=$febtotal+$boatstripfeb->revenue;
         }
 
         $startmarch="$year-03-01";
         $endmarch="$year-03-31";
         $boatstripmarch =DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startmarch' AND '$endmarch'");
         $marchtotal=0;
         foreach($boatstripmarch as $boatstripmarch){
             $marchtotal=$marchtotal+$boatstripmarch->revenue;
         }
 
         $startapr="$year-04-01";
         $endapr="$year-04-31";
         $boatstripapr = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startapr' AND '$endapr'");
         $aprtotal=0;
         foreach($boatstripapr as $boatstripapr){
             $aprtotal=$aprtotal+$boatstripapr->revenue;
         }
 
         $startmay="$year-05-01";
         $endmay="$year-05-31";
         $boatstripmay = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startmay' AND '$endmay'");
         $maytotal=0;
         foreach($boatstripmay as $boatstripmay){
             $maytotal=$maytotal+$boatstripmay->revenue;
         }
 
        
 
         $startjune="$year-06-01";
         $endjune="$year-06-31";
         $boatstripjune = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startjune' AND '$endjune'");
         $junetotal=0;
         foreach($boatstripjune as $boatstripjune){
             $junetotal=$junetotal+$boatstripjune->revenue;
         }
 
         $startjul="$year-07-01";
         $endjul="$year-07-31";
        $boatstripjul = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startjul' AND '$endjul'");
         $jultotal=0;
         foreach($boatstripjul as $boatstripjul){
             $jultotal=$jultotal+$boatstripjul->revenue;
         }
 
         $startaug="$year-08-01";
         $endaug="$year-08-31";
         $boatstripaug =DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startaug' AND '$endaug'");
         $augtotal=0;
         foreach($boatstripaug as $boatstripaug){
             $augtotal=$augtotal+$boatstripaug->revenue;
         }
     
         $startsep="$year-09-01";
         $endsep="$year-09-31";
         $boatstripsep = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startsep' AND '$endsep'");
         $septotal=0;
         foreach($boatstripsep as $boatstripsep){
             $septotal=$septotal+$boatstripsep->revenue;
         }
 
 
         // $startoct="$year-10-01";
         // $endoct="$year-10-31";
         // $boatstripoct =collect( DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startoct' AND '$endoct'"))->where('boatowner_id',$id);
         // $octtotal=0;
         // foreach($boatstripoct as $boatstripdoct){
         //     $octtotal=$octtotal+$boatstripoct->payement_amount;
         // }
         $startoct="$year-10-01";
         $endoct="$year-10-31";
         $boatstripoct = DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startoct' AND '$endoct'");
         $octtotal=0;
         foreach($boatstripoct as $boatstripoct){
             $octtotal=$octtotal+$boatstripoct->revenue;
         }
 
         $startnove="$year-11-01";
         $endnove="$year-12-31";
         $boatstripnove =DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startnove' AND '$endnove'");
         $novtotal=0;
         foreach($boatstripnove as $boatstripnove){
             $novtotal=$novtotal+$boatstripnove->revenue;
         }
 
 
 
         $startdec="$year-12-01";
         $enddec="$year-12-31";
    $boatstripdec =DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startdec' AND '$enddec'");
        
        $dectotal=0;
         foreach($boatstripdec as $boatstripdec){
             $dectotal=$dectotal+$boatstripdec->revenue;
         }
         
 
         return view('adminfunctions.annual_earning_display')->with('dectotal',$dectotal)->with('jantotal',$jantotal)->with('febtotal',$febtotal)->with('marchtotal',$marchtotal)
         ->with('aprtotal',$aprtotal)->with('maytotal',$maytotal)->with('junetotal',$junetotal)->with('jultotal',$jultotal)->with('augtotal',$augtotal)
         ->with('septotal',$septotal)->with('octtotal',$octtotal)->with('novtotal',$novtotal);  
        }
   }
