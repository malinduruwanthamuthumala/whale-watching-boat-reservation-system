@extends('layouts.userprofileboat')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@section('content')

<div class="card col-md-8" style="margin-top:100px">

    
  
    <!-- Card content -->
    <div class="card-body">
  
     
      <p class="card-text">End the trip to transfer the money for the account</p>
      <!-- Button -->
      <div class="row">
        
          <div class="col-md-8 card" style="padding:10px">
          <h5>Total Earnings :$ {{$total_price}}</h5>
          </div>
        <div class="col-md-offset-4">
            
            <form action="/endtrip">
            <input type="hidden" value="{{$resid}}" name="res_id" id="res_id">
                <input type="submit" class="btn btn-success" value="End Trip" >
            </form>
          </div>
      </div>
     
     
  
    </div>
  
  </div>
  

<div style="margin-top:100px;margin-left:-150px">
    <div class="form-group">
        <input type="text" name="search" id="search" class="form-control" placeholder="Search  Data" style="width:300px;">
       </div>
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
                  {{-- @foreach($res_details as $res_details)
                         <tr>
                         <th >{{$res_details->fname}}</th>
                         <td>{{$res_details->lname}}</td>
                         <td>{{$res_details->email}}</td>
                         <td>{{$res_details->NIC}}</td>
                         <td>{{$res_details->NOofseats}}</td>
                         <td>{{$res_details->telephone}}</td>
                         
                        <td>{{$res_details->payementstatus}}</td>
                         <td>{{$res_details->price}}</td>

                      
                         </tr>
                      
                  @endforeach --}}
           </tbody>
          
         </table>
         
        
</div>

<script>
    $(document).ready(function(){
   
     fetch_customer_data();
    
     function fetch_customer_data(query = '')
     {
       var resid=$('#res_id').val();
       
      $.ajax({
         
       url:"live/action/",
       method:'GET',
       data:{query:query,resid:resid},
       dataType:'json',
       success:function(data)
       {
        $('tbody').html(data.table_data);
        $('#total_records').text(data.total_data);
       }
      })
     }
    
     $(document).on('keyup', '#search', function(){
      
      var query = $(this).val();

      fetch_customer_data(query);
     });
    });
    </script>
@endsection