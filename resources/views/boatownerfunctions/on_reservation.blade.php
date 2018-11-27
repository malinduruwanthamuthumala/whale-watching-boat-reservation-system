@extends('layouts.userprofileboat')

@section('content')

<div>

       
</div>
<div style="margin-top:100px;margin-left:-150px">

       <table class="table">
              <thead class="black white-text">
                <tr>
                  <th scope="col">Boat Name</th>
                  <th scope="col">Available seats</th>
                  <th scope="col">Reserved Seats</th>
                  <th scope="col">Trip Date</th>
                  <th scope="col">Location</th>
                  
                  <th scope="col"></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                     @foreach($ongoing as $ongoing)
                            <tr>
                            <th >{{$ongoing->boatname}}</th>
                            <td>{{$ongoing->availableseats}}</td>
                            <td>{{$ongoing->reservedseats}}</td>
                            <td>{{$ongoing->start_date}}</td>
                            <td>{{$ongoing->location}}</td>
                            <td><form action="/res_details"><input type="hidden" name="resid" value="{{$ongoing->reservationid}}">
                                   <input type="submit" class="btn btn-outline-primary btn-sm" value=" VIEW RESERVATION DETAILS"></form></td>
                           <td><a href="" class="btn btn-danger btn-sm">End Trip</a></td>
                            </tr>
                     @endforeach
              </tbody>
            </table>
            
           
</div>

@endsection