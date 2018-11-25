@extends('layouts.userprofileboat')
@section('content')

    
    {{-- counter --}}
    
                    <div class="row text-center" style="margin-top:150px;margin-left:-100px">
                        <div class="col-md-3">
                        <div class="counter">
                            <i class="fa fa-code fa-2x"></i>
                            <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
                            <p class="count-text ">Our Customer</p>
                            <h3>100</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter">
                            <i class="fa fa-coffee fa-2x"></i>
                            <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                            <p class="count-text ">Happy Clients</p>
                            <h3>75</h3>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter">
                            <i class="fa fa-lightbulb-o fa-2x"></i>
                            <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
                            <p class="count-text ">Project Complete</p>
                            <h3>$1500</h3>
                            </div>
                        </div>
                        <div class="col">
                        <div class="counter">
                            <i class="fa fa-bug fa-2x"></i>
                            <h2 class="timer count-title count-number" data-to="157" data-speed="1500"></h2>
                            <p class="count-text ">Coffee With Clients</p>
                            <h3>22</h3>
                            </div>
                        </div>
                    </div>
    {{-- counter ends --}}
    <div class="row" style="margin-top:100px;margin-left:-100px">
    <div class="col-md-12" >
            <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th>NAME</th>
                            <th>Location</th>
                            <th>Number of seats</th>
                            <th>status</th>
                            
                            <th>Delete Boat</th>
                            
                        </tr>
                    </thead>
                   
                
                                           
            @foreach($boats as $boats) 
            <tbody>
                    <tr class="">
                             <td >{{$boats->name}}</td>
                            <td>{{$boats->location}}</td>
                            <td>{{$boats->noofinsuredpassengers}}</td>
                            <td>{{$boats->status}}</td>
                            <td>
                            <a href="/boats/{{$boats->boatid}}/edit" class="btn btn-primary">EDIT DETAILS</a>
                            </td>
                            

                        </tr>
            </tbody>
           
            @endforeach
        </table>
    </div>
    
</div>

@endsection



<style>
    .counter {
    background-color:#f5f5f5;
    padding: 20px 0;
    border-radius: 5px;
}

.count-title {
    font-size: 40px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.count-text {
    font-size: 13px;
    font-weight: normal;
    margin-top: 10px;
    margin-bottom: 0;
    text-align: center;
}

.fa-2x {
    margin: 0 auto;
    float: none;
    display: table;
    color: #4ad1e5;
}
</style>

<script>

    
</script>