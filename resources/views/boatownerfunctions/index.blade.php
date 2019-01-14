@extends('layouts.userprofileboat')
@section('content')

    
    {{-- counter --}}
    
               
    {{-- counter ends --}}
    <div class="row" style="margin-top:100px;margin-left:-100px">
    <div class="col-md-12" >
            <table class="table" border="1">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Location</th>
                            <th>Number Of Seats</th>
                            <th>Status</th>
                            <th>Boat Type</th>
                            <th>Details</th>
                            
                        </tr>
                    </thead>
                   
                
                                           
            @foreach($boats as $boats) 
            <tbody>
                    <tr class="">
                             <td >{{$boats->name}}</td>
                            <td>{{$boats->location}}</td>
                            <td>{{$boats->noofinsuredpassengers}}</td>
                            <td>{{$boats->status}}</td>
                             <td>{{$boats->boattype}}</td>
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