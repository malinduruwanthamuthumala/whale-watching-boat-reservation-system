@extends('layouts.userprofileadmin')
@section('content')
<div style="margin-top:150px;margin-left:-50px">
        <table class="table">
                <thead class="black white-text">
                  <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th>ID</th>
                   
                  </tr>
                </thead>
                <tbody>
                     
                       @foreach($user as $user)
                      
                              <tr>
                                 
                              <th >{{$user->fname}}</th>
                              <th >{{$user->lname}}</th>
                              <th>{{$user->email}}</th>
                              <th>{{$user->id}}</th>
                              
                              
                            
                             
                             
                             
     
                           
                              </tr>
                             
                       @endforeach
                   
                </tbody>
               
              </table>      
</div>

@endsection