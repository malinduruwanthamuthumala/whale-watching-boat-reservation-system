@extends('layouts.userprofileboat')

@section('content')



<div style="margin-top:100px;margin-left:-150px">

    <table class="table">
      <p>commission for the waves have been deducted from the original cash flow</p>
           <thead class="black white-text">
             <tr>
               <th scope="col">Payment ID</th>
               <th scope="col">Reservation ID</th>
               <th scope="col">payement Transfer Status</th>
               <th scope="col">Receivable Cash</th>
               
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