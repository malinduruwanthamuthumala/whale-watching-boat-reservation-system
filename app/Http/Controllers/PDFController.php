<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
use App\trips;
use DB;


class PDFController extends Controller
{
    //locaation = all locations

   function getPDF(){
    
    $boattrips = trips::all();

        $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boattrips]);
        return $pdf -> stream('boattrip.pdf');
    }

    //location = mirissa
    public function getPDFmirissaa(){

        $idm='mirissa';
        $boatsmirissas = trips::where('location',$idm)->get();

        $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsmirissas]);
        return $pdf -> stream('boattrip.pdf');
    }

    //location = trinco
    public function getPDFtrinco(){

        $idm='trincomalee';
        $boatstrinco = trips::where('location',$idm)->get();
  

        $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatstrinco]);
        return $pdf -> stream('boattrip.pdf');
    }

    //location = colombo
     public function getPDFcolombo(){
        $idm='colombo';
        $boatscolombo = trips::where('location',$idm)->get();
  

        $pdf = PDF::loadView('pdf.boattrip' ,['boat'=>$boatscolombo]);
        return $pdf -> stream('boattrip.pdf');
     }
  
     //month by month generate report
     public function month(Request $req){
         $month=$req->input('month');
         //january
         if($month==1){
            $idm='2018-01-01';
            $idm2='2018-01-31';
            $boatsjanuary = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2'");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsjanuary]);
            return $pdf -> stream('boattrip.pdf');
         }
         //february
         else if($month==2){
            $idm='2018-02-01';
            $idm2='2018-02-28';
            $boatsfebruary = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2'");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsfebruary]);
            return $pdf -> stream('boattrip.pdf');
         }

         //march
         else if($month==3){
            $idm='2018-03-01';
            $idm2='2018-03-31';
            $boatsmarch = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsmarch]);
            return $pdf -> stream('boattrip.pdf');
         }

          //april
          else if($month==4){
            $idm='2018-04-01';
            $idm2='2018-04-30';
            $boatsapril = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsapril]);
            return $pdf -> stream('boattrip.pdf');
         }

          //may
          else if($month==5){
            $idm='2018-05-01';
            $idm2='2018-05-31';
            $boatsmay = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsmay]);
            return $pdf -> stream('boattrip.pdf');
         }

          //june
          else if($month==6){
            $idm='2018-06-01';
            $idm2='2018-06-30';
            $boatsjune = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsjune]);
            return $pdf -> stream('boattrip.pdf');
         }

          //july
          else if($month==7){
            $idm='2018-07-01';
            $idm2='2018-07-31';
            $boatsjuly = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsjuly]);
            return $pdf -> stream('boattrip.pdf');
         }

         //august
         else if($month==8){
            $idm='2018-08-01';
            $idm2='2018-08-31';
            $boatsaugust = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsaugust]);
            return $pdf -> stream('boattrip.pdf');
         }

         //september
         else if($month==9){
            $idm='2018-09-01';
            $idm2='2018-09-30';
            $boatsseptember = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsseptember]);
            return $pdf -> stream('boattrip.pdf');
         }

        //october
        else if($month==10){
            $idm='2018-10-01';
            $idm2='2018-10-31';
            $boatsoctober = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsoctober]);
            return $pdf -> stream('boattrip.pdf');
         }

        //november
        else if($month==11){
            $idm='2018-11-01';
            $idm2='2018-11-30';
            $boatsnovember = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsnovember]);
            return $pdf -> stream('boattrip.pdf');
         }

         //december
        else if($month==12){
            $idm='2018-12-01';
            $idm2='2018-12-31';
            $boatsdecember = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsdecember]);
            return $pdf -> stream('boattrip.pdf');
         }


     }

     
}