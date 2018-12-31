<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;use App\boats;
use App\trips;
use App\invoice;
use App\payment;
class ReportboatownerController extends Controller
{
    public function index(){
        return view('boatownerfunctions.reports');
    }

    public function monthreportBoat(request $request){
        $id=auth()->user()->id;
        $month=$request->input('month');
        $year=$request->input('year');

        $startjan="$year-01-01";
        $endjan="$year-01-31";
       $boatstripjan = collect(DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startjan' AND '$endjan'"))->where('boatowner_id',$id);
        $jantotal=0;
        foreach($boatstripjan as $boatstripjan){
            $jantotal=$jantotal+$boatstripjan->payement_amount;
        }


        $startfeb="$year-02-01";
        $endfeb="$year-02-31";
        $boatstripfeb =collect(DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startfeb' AND '$endfeb'"))->where('boatowner_id',$id);
        $febtotal=0;
        foreach($boatstripfeb as $boatstripfeb){
            $febtotal=$febtotal+$boatstripfeb->payement_amount;
        }

        $startmarch="$year-03-01";
        $endmarch="$year-03-31";
        $boatstripmarch =collect(DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startmarch' AND '$endmarch'"))->where('boatowner_id',$id);
        $marchtotal=0;
        foreach($boatstripmarch as $boatstripmarch){
            $marchtotal=$marchtotal+$boatstripmarch->payement_amount;
        }

        $startapr="$year-04-01";
        $endapr="$year-04-31";
        $boatstripapr = collect(DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startapr' AND '$endapr'"))->where('boatowner_id',$id);
        $aprtotal=0;
        foreach($boatstripapr as $boatstripapr){
            $aprtotal=$aprtotal+$boatstripapr->payement_amount;
        }

        $startmay="$year-05-01";
        $endmay="$year-05-31";
        $boatstripmay = collect(DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startmay' AND '$endmay'"))->where('boatowner_id',$id);
        $maytotal=0;
        foreach($boatstripmay as $boatstripmay){
            $maytotal=$maytotal+$boatstripmay->payement_amount;
        }

       

        $startjune="$year-06-01";
        $endjune="$year-06-31";
        $boatstripjune =collect( DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startjune' AND '$endjune'"))->where('boatowner_id',$id);
        $junetotal=0;
        foreach($boatstripjune as $boatstripjune){
            $junetotal=$junetotal+$boatstripjune->payement_amount;
        }

        $startjul="$year-07-01";
        $endjul="$year-07-31";
       $boatstripjul =collect( DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startjul' AND '$endjul'"))->where('boatowner_id',$id);
        $jultotal=0;
        foreach($boatstripjul as $boatstripjul){
            $jultotal=$jultotal+$boatstripjul->payement_amount;
        }

        $startaug="$year-08-01";
        $endaug="$year-08-31";
        $boatstripaug =collect( DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startaug' AND '$endaug'"))->where('boatowner_id',$id);
        $augtotal=0;
        foreach($boatstripaug as $boatstripaug){
            $augtotal=$augtotal+$boatstripaug->payement_amount;
        }
    
        $startsep="$year-09-01";
        $endsep="$year-09-31";
        $boatstripsep = collect(DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startsep' AND '$endsep'"))->where('boatowner_id',$id);
        $septotal=0;
        foreach($boatstripsep as $boatstripsep){
            $septotal=$septotal+$boatstripsep->payement_amount;
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
        $boatstripoct = collect(DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startoct' AND '$endoct'"))->where('boatowner_id',$id);
        $octtotal=0;
        foreach($boatstripoct as $boatstripoct){
            $octtotal=$octtotal+$boatstripoct->payement_amount;
        }

        $startnove="$year-11-01";
        $endnove="$year-12-31";
        $boatstripnove =collect(DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startnove' AND '$endnove'"))->where('boatowner_id',$id);
        $novtotal=0;
        foreach($boatstripnove as $boatstripnove){
            $novtotal=$novtotal+$boatstripnove->payement_amount;
        }



        $startdec="$year-12-01";
        $enddec="$year-12-31";
   $boatstripdec =collect(DB::select("SELECT * FROM payments WHERE Enddate BETWEEN '  $startdec' AND '$enddec'"))->where('boatowner_id',$id);
       
       $dectotal=0;
        foreach($boatstripdec as $boatstripdec){
            $dectotal=$dectotal+$boatstripdec->payement_amount;
        }
        

        return view('boatownerfunctions.annual')->with('dectotal',$dectotal)->with('jantotal',$jantotal)->with('febtotal',$febtotal)->with('marchtotal',$marchtotal)
        ->with('aprtotal',$aprtotal)->with('maytotal',$maytotal)->with('junetotal',$junetotal)->with('jultotal',$jultotal)->with('augtotal',$augtotal)
        ->with('septotal',$septotal)->with('octtotal',$octtotal)->with('novtotal',$novtotal);  
    }
}
