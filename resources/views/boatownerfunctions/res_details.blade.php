@extends('layouts.userprofileboat')

@section('content')

<div class="card col-md-8" style="margin-top:100px">

    
  
    <!-- Card content -->
    <div class="card-body">
  
     
      <p class="card-text">End the trip to transfer the money for the account</p>
      <!-- Button -->
      <div class="row">
          <div class="col-md-8 card" style="padding:10px">
              <h5>Total Earnings :</h5>
          </div>
        <div class="col-md-offset-4">
            
            <form action="/endtrip">
            <input type="hidden" value="{{$resid->reservationid}}" name="res_id">
                <input type="submit" class="btn btn-success" value="End Trip" >
            </form>
          </div>
      </div>
     
     
  
    </div>
  
  </div>

<div style="margin-top:100px;margin-left:-150px">

    <table class="table">
           <thead class="black white-text">
             <tr>
               <th scope="col">First Name</th>
               <th scope="col">Last Name</th>
               <th scope="col">Email</th>
               <th scope="col">NIC</th>
               <th scope="col">Number of seats </th>
               <th> telephone number</th>
               <th>payement status</th>
               <th>Price paid</th>
               
               <th scope="col"></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
                  @foreach($res_details as $res_details)
                         <tr>
                         <th >{{$res_details->fname}}</th>
                         <td>{{$res_details->lname}}</td>
                         <td>{{$res_details->email}}</td>
                         <td>{{$res_details->NIC}}</td>
                         <td>{{$res_details->NOofseats}}</td>
                         <td>{{$res_details->telephone}}</td>
                         
                        <td>{{$res_details->payementstatus}}</td>
                         <td></td>
                         </tr>
                  @endforeach
           </tbody>
         </table>
         
        
</div>

@endsection