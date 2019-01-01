@extends('layouts.userprofileadmin')
@section('content')
<div style="margin-top:100px;margin-left:-100px">

        <table class="table">
               <thead class="black white-text">
                 <tr>
                   <th scope="col">Reservation ID</th>
                   <th>boatid</th>
                   <th>start_date</th>
                   <th>	end_date</th>
                   <th>location</th>
                   <th>startingtime</th>
                   <th>boatname</th>
                   <th>	owner id</th>
                   <th>status</th>
                  
                  
                   <th></th>
                   
                   <th scope="col"></th>
                   <th></th>
                 </tr>
               </thead>
               <tbody>
                    
                      @foreach($trip as $trips)
                     
                             <tr>
                                
                             <th >{{$trips->reservationid}}</th>
                             <th >{{$trips->boatid}}</th>
                             <th >{{$trips->start_date}}</th>
                             <th >{{$trips->end_date}}</th>
                             <th >{{$trips->location}}</th>
                             <th >{{$trips->startingtime}}</th>
                             <th >{{$trips->boatname}}</th>
                             <th >{{$trips->ownerid}}</th>
                             <th >{{$trips->status}}</th>
                             
                            
                           
                            
                            
                            
    
                          
                             </tr>
                            
                      @endforeach
                      {{$trip->links()}}
                   
               </tbody>
              
             </table>

@endsection