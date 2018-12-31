@extends('layouts.userprofileadmin')
@section('content')
<div style="margin-top:100px;margin-left:-50px">

        <table class="table ">
                <tbody >
                 <tr class="table-info"><th class=>Boat ID</th><td>{{$details->boatid}}</td></tr>
                <tr><th>owner ID</th><td>{{$details->ownerid}}</td></tr>
                 <tr class="table-info"><th>owner name</th><td>{{$owner->fname}} {{$owner->lname}}</td></tr>
                 <tr><th>email</th><td>{{$owner->email}}</td></tr>
                 
                 <tr class="table-info"><th>Government Reg No</th><td>{{$details->governmentregno}}</td></tr>
                 <tr><th>Name</th><td>{{$details->name}}</td></tr>
                 <tr class="table-info"> <th>Boat type</th><td>{{$details->boattype}}</td></tr>
                 <tr><th>Location</th><td>{{$details->location}}</td></tr>
                 <tr class="table-info"><th>No of seats</th><td>{{$details->noofseats}}</td></tr>
                 <tr><th>Phone Number</th><td>{{$details->phonenumber}}</td></tr>
                 <tr class="table-info"><th>Insuered passengers</th><td>{{$details->noofinsuredpassengers}}</td></tr>
                 <tr><th>Insuarence company</th><td>{{$details->insuarancecpmpanyname}}</td></tr>
                 <tr class="table-info"><th>Insuarence ID</th><td>{{$details->insuaranceregno}}</td></tr>
                 <tr><th>Bank acc No</th><td>{{$details->bankacountnumber}}</td></tr>
                 <tr class="table-info"><th>Registered Date</th><td>{{$details->created_at}}</td></tr>
                </tbody>
               
              </table>
              <div class="card">
                  <div class="row">
                      <div class="col-md-3"><form action="/setconfirmation">
                            <input type="hidden" value={{$details->boatid}} name="id">
                            <input type="submit" class="btn btn-primary" value="CONFIRM RESERVATION">
                            
                        </form></div>
                      <div class="col-md-2"><form action="">
                            <input type="hidden" value={{$details->boatid}} name="id">
                            <input type="submit" class="btn btn-danger" value="Decline">
                            
                        </form> </div>
                  </div>
                    
                        
                </div>  
</div>

@endsection
<style>

    /* th{
        background:gainsboro;
    }
    td{
        background:palegreen;
    } */
</style>