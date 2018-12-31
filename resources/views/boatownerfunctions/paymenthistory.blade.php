@extends('layouts.userprofileboat')

@section('content')



<div style="margin-top:100px;margin-left:-150px">

    <table class="table">
           <thead class="black white-text">
             <tr>
               <th scope="col">Payement Id</th>
               <th scope="col">Reservation ID</th>
               <th scope="col">Transfered Amount</th>
               <th scope="col">Payed date</th>
              
               
               <th></th>
               
               <th scope="col"></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
                 @foreach($payement as $payement)
                         <tr>
                         <th>{{$payement->payementid}}</th>
                         <th>{{$payement->res_id}}</th>
                         <th>$ {{$payement->payement_amount}}</th>
                         <th>{{$payement->updated_at}}</th>
                   

                      
                         </tr>
                   @endforeach   
                
           </tbody>
          
         </table>
         
        
</div>

@endsection