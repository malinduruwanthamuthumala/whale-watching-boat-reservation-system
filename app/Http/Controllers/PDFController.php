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
         $year=$req->input('year');
         //january
         if($month==1){
            $idm=$year.'-01-01';
            $idm2=$year.'-01-31';
            $boatsjanuary = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2'");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsjanuary]);
            return $pdf -> stream('boattrip.pdf');
         }
         //february
         else if($month==2){
            $idm=$year.'-02-01';
            $idm2=$year.'-02-28';
            $boatsfebruary = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2'");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsfebruary]);
            return $pdf -> stream('boattrip.pdf');
         }

         //march
         else if($month==3){
            $idm=$year.'-03-01';
            $idm2=$year.'-03-31';
            $boatsmarch = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsmarch]);
            return $pdf -> stream('boattrip.pdf');
         }

          //april
          else if($month==4){
            $idm=$year.'-04-01';
            $idm2=$year.'-04-30';
            $boatsapril = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsapril]);
            return $pdf -> stream('boattrip.pdf');
         }

          //may
          else if($month==5){
            $idm=$year.'-05-01';
            $idm2=$year.'-05-31';
            $boatsmay = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsmay]);
            return $pdf -> stream('boattrip.pdf');
         }

          //june
          else if($month==6){
            $idm=$year.'-06-01';
            $idm2=$year.'-06-30';
            $boatsjune = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsjune]);
            return $pdf -> stream('boattrip.pdf');
         }

          //july
          else if($month==7){
            $idm=$year.'-07-01';
            $idm2=$year.'-07-31';
            $boatsjuly = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsjuly]);
            return $pdf -> stream('boattrip.pdf');
         }

         //august
         else if($month==8){
            $idm=$year.'-08-01';
            $idm2=$year.'-08-31';
            $boatsaugust = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsaugust]);
            return $pdf -> stream('boattrip.pdf');
         }

         //september
         else if($month==9){
            $idm=$year.'-09-01';
            $idm2=$year.'-09-30';
            $boatsseptember = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsseptember]);
            return $pdf -> stream('boattrip.pdf');
         }

        //october
        else if($month==10){
            $idm=$year.'-10-01';
            $idm2=$year.'-10-31';
            $boatsoctober = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsoctober]);
            return $pdf -> stream('boattrip.pdf');
         }

        //november
        else if($month==11){
            $idm= $year.'-11-01';
            $idm2=$year.'-11-30';
            $boatsnovember = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsnovember]);
            return $pdf -> stream('boattrip.pdf');
         }

         //december
        else if($month==12){
            $idm=$year.'-12-01';
            $idm2=$year.'-12-31';
            $boatsdecember = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
            $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsdecember]);
            return $pdf -> stream('boattrip.pdf');
         }


        //  function year(){
            

        //  $year =  $_POST['year']
        //     $idm ='$year-01-01';
        //     $idm2='$yeaar-12-31';
        //     $boatsjanuary = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2'");
        //     $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsjanuary]);
        //     return $pdf -> stream('boattrip.pdf');
            
         

     }
// disply the pge
public function displayPDFtrinco(){

    $idm='trincomalee';
    $boatstrinco = trips::where('location',$idm)->get();


   return View('pdf.boattripsdisply', ['boat'=>$boatstrinco]);
    // return $pdf -> stream('boattrip.pdf');
}
public function displayPDFmirissaa(){

    $idm='mirissa';
    $boatsmirissas = trips::where('location',$idm)->get();

    return View('pdf.boattripdisplay_mirissa', ['boat'=>$boatsmirissas]);
    // return $pdf -> stream('boattrip.pdf');
}

 public function displayPDFcolombo(){
    $idm='colombo';
    $boatscolombo = trips::where('location',$idm)->get();


    return View('pdf.boattripdisplay_colombo' ,['boat'=>$boatscolombo]);
   // return $pdf -> stream('boattrip.pdf');
 }
 public function displymonth(Request $req){
    $month=$req->input('month');
    $year=$req->input('year');
    //january
    if($month==1){
       $idm=$year.'-01-01';
       $idm2=$year.'-01-31';
       $boatsjanuary = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2'");
      return View('pdf.boattripyer_month')->with('boat',$boatsjanuary)->with('month',$month)->with('year',$year);
    //    return $pdf -> stream('boattrip.pdf');
    }
    //february
    else if($month==2){
       $idm=$year.'-02-01';
       $idm2=$year.'-02-28';
       $boatsfebruary = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2'");
       $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsfebruary]);
       return $pdf -> stream('boattrip.pdf');
    }

    //march
    else if($month==3){
       $idm=$year.'-03-01';
       $idm2=$year.'-03-31';
       $boatsmarch = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
       $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsmarch]);
       return $pdf -> stream('boattrip.pdf');
    }

     //april
     else if($month==4){
       $idm=$year.'-04-01';
       $idm2=$year.'-04-30';
       $boatsapril = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
       $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsapril]);
       return $pdf -> stream('boattrip.pdf');
    }

     //may
     else if($month==5){
       $idm=$year.'-05-01';
       $idm2=$year.'-05-31';
       $boatsmay = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
       $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsmay]);
       return $pdf -> stream('boattrip.pdf');
    }

     //june
     else if($month==6){
       $idm=$year.'-06-01';
       $idm2=$year.'-06-30';
       $boatsjune = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
       $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsjune]);
       return $pdf -> stream('boattrip.pdf');
    }

     //july
     else if($month==7){
       $idm=$year.'-07-01';
       $idm2=$year.'-07-31';
       $boatsjuly = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
       $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsjuly]);
       
    }

    //august
    else if($month==8){
       $idm=$year.'-08-01';
       $idm2=$year.'-08-31';
       $boatsaugust = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
       $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsaugust]);
       return $pdf -> stream('boattrip.pdf');
    }

    //september
    else if($month==9){
       $idm=$year.'-09-01';
       $idm2=$year.'-09-30';
       $boatsseptember = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
       $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsseptember]);
       return $pdf -> stream('boattrip.pdf');
    }

   //october
   else if($month==10){
       $idm=$year.'-10-01';
       $idm2=$year.'-10-31';
       $boatsoctober = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
       $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsoctober]);
    //    return $pdf -> stream('boattrip.pdf');
    }

   //november
   else if($month==11){
       $idm= $year.'-11-01';
       $idm2=$year.'-11-30';
       $boatsnovember = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
       $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsnovember]);
    //    return $pdf -> stream('boattrip.pdf');
    }

    //december
   else if($month==12){
       $idm=$year.'-12-01';
       $idm2=$year.'-12-31';
       $boatsdecember = DB::select("SELECT * FROM boattrips WHERE start_date BETWEEN '$idm' AND '$idm2' ");
       $pdf = PDF::loadView('pdf.boattrip', ['boat'=>$boatsdecember]);
    //    return $pdf -> stream('boattrip.pdf');
    }

}
}