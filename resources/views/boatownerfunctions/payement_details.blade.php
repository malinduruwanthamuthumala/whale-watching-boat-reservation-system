@extends('layouts.userprofileboat')

@section('content')



<div style="margin-top:100px;margin-left:-150px">

    <table class="table">
           <thead class="black white-text">
             <tr>
               <th scope="col">Payement Id</th>
               <th scope="col">Reservation ID</th>
               <th scope="col">payement Transfer status</th>
               <th scope="col">Payement Amount</th>
               <th scope="col">Commission</th>
               <th>Trip ended date & time</th>
               <th></th>
               
               <th scope="col"></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
                  @foreach($payement_details as $payement_details)
                         <tr>
                         <th >{{$payement_details->payementid}}</th>
                         <th >{{$payement_details->res_id}}</th>
                         <th >{{$payement_details->status}}</th>
                         <th>$ {{$payement_details->payement_amount}}</th>
                         <th >$ {{$payement_details->revenue}}</th>
                         <th>{{$payement_details->created_at}}</th>
                       <th><form action="/payement_history"><input type="hidden" value="{{$payement_details->payementid}}" name="payid">
                    <input type="submit" class="btn btn-outline-primary btn-sm" value="TRANSFER THE MONEY">
                    </form></th>
                         
                   

                      
                         </tr>
                      
                  @endforeach
           </tbody>
          
         </table>
         
        
</div>

@endsection