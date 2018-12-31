@extends('layouts.userprofileadmin')
@section('content')
<div style="margin-top:100px;margin-left:-50px">

    <table class="table">
           <thead class="black white-text">
             <tr>
               <th scope="col">Boat ID</th>
               <th scope="col">Location</th>
               <th scope="col">Boat type</th>
               <th scope="col">view more details</th>
               <th>confirm registration</th>
              
               
               <th></th>
               
               <th scope="col"></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
                 @foreach($boats as $boats)
                         <tr>
                         <th>{{$boats->boatid}}</th>
                         <th>{{$boats->location}}</th>
                         <th> {{$boats->boattype}}</th>
                         <th>
                            <form action="/moredetailsboats">
                                <input type="hidden" value={{$boats->boatid}} name="id">
                                <input type="hidden" value={{$boats->ownerid}} name="owner">
                                <input type="submit" class="btn btn-outline-danger btn-sm" value="view more details">
                            </form>
                        </th>
                        <th>
                            <form action="/setconfirmation">
                                <input type="hidden" value={{$boats->boatid}} name="id">
                                <input type="submit" class="btn btn-outline-success btn-sm" value="confirm registration">
                            </form>
                        </th>
                   

                      
                         </tr>
                   @endforeach   
                
           </tbody>
          
         </table>
         

@endsection