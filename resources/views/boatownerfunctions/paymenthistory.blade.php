@extends('layouts.userprofileboat')

@section('content')



<div style="margin-top:100px;margin-left:-150px">
  <div style="background-color:#D1F7E3;height:40px">
    
  <p style="">TOTAL CASH TRANSFERED :  USD {{$total}}</p>
  </div>
<br>
  <form action="/search_history">
    <div class="row">
      <div class="col-md-3">
          <input type="date" class="form-control" name="start_date"></div> 
    
      <div class="col-md-3">
          <input type="date" class="form-control" name="end_date">
        </div>
    
    <div class="col-md-3">
        <input type="submit" class=" btn-success" value="search" >
    </div>
  </div>
  </form>
  <br>
    <table class="table">
           <thead class="black white-text">
             <tr>

               <th scope="col">Payment ID</th>
               <th scope="col">Reservation ID</th>
               <th scope="col">Transfered Amount</th>
               <th scope="col">Paid Date</th>
              
               
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