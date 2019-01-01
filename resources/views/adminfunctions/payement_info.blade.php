@extends('layouts.userprofileadmin')
@section('content')

<div style="margin-top:100px;margin-left:-100px">

    <table class="table">
           <thead class="black white-text">
             <tr>
               <th scope="col">Payement Id</th>
               <th scope="col">acc No</th>
               <th scope="col">status</th>
               <th>payed amount</th>
               <th>Revenue</th>
               <th>payed Date</th>
               <th>Trip Ended Date</th>
              
              
               <th></th>
               
               <th scope="col"></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
                
                  @foreach($payements as $payement)
                 
                         <tr>
                            
                         <th >{{$payement->payementid}}</th>
                         <th >{{$payement->acc_no}}</th>
                         <th>{{$payement->status}}</th>
                         <th>{{$payement->payement_amount}}</th>
                         <th>{{$payement->revenue}}</th>
                         <th>{{$payement->updated_at}}</th>
                         <th>{{$payement->Enddate}}</th>
                         
                       
                        
                        
                        

                      
                         </tr>
                        
                  @endforeach
                  {{$payements->links()}}
                <div class="row">
                    <form action="/searchpayement" class="form-group">
                        <div class="col-md-4">
                            <input type="date" class="form-control" name="stdate">
                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" name="enddate">
                        </div>
                        <div class="col-md-4">
                           <input type="submit" value="search" class="btn-info">
                        </div>
                    </form>

                </div>
           </tbody>
          
         </table>
@endsection