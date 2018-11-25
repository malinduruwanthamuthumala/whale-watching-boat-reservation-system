@extends('layouts.basic')

@section('content')

<div class="row">
    <div class=" col-md-12 " style="width=100%" >
        <img src="../storage/cover_images/{{$home->cover_image}}" alt="" class="header-img ">
    </div>

</div> 
<div class=" container headerprof">
<div class="row" style="margin-top:-250px">

        <div class="col-md-4 card ">
            <img src="../storage/profile_image/{{$home->profile_image}}" alt="" class="img-fluid">
        </div>
        <div  class="col-md-1"></div>
        <div class="col-md-7  card" style="padding-top:10">
        <h1>{{$home->boatname}}</h1>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus 
                recusandae dolorem debitis quidem ipsam asperiores perspiciatis quisquam distinctio 
                ipsa! Quia impedit velit ullam quod in minima distinctio reiciendis dolorum unde?</p>

               <div class="row" style="background-color:#3498DB  ">
                  

               </div>
               <div class="">
                   <br>
                    <h5>BOAT RESERVATION:<span class="badge red">NOT ONGOING</span></h5>
                    <h5>RESERVATION DATE:<span class="badge blue">NOT DECLARED</span></h5>
                </div> 
        </div>
</div>   
<div class="row">
    <div class="col-md-4 card" style="padding-top:50px">
     
    <p>boat id:<span style="color:black">{{$home->boatid}}</span></p>
    <p>registration no:<span style="color:black">{{$home->registrationnumber}}</span></p>
        <p>Available seats:<span style="color:black">{{$home->availableseats}}</span></p>
        <p>Reserved seats:<span style="color:black">{{$home->receivedseats}}</span></p>
        <p>next trip date:<span style="color:black">{{$home->reservationdate}}</span></p>
    <p>Location:mirissa harbour</p>
        <p>starts at:</p>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-7">

            <div class=" mb-5 mt-5 row">
                    <div class="pricing card-deck flex-column flex-md-row mb-6 col-md-6" style=" background-color:#3498DB    ">
                        <div class="card card-pricing text-center px-3 mb-4" >
                            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Starter</span>
                            <div class="bg-transparent card-header pt-4 border-0">
                                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">$<span class="price">3</span><span class="h6 text-muted ml-2">/ per month</span></h1>
                            </div>
                            <div class="card-body pt-0">
                                <ul class="list-unstyled mb-4">
                                    <li>Up to 5 users</li>
                                    <li>Basic support on Github</li>
                                    <li>Monthly updates</li>
                                    <li>Free cancelation</li>
                                </ul>
                                <button type="button" class="btn btn-primary mb-3">Order now</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="pricing card-deck flex-column flex-md-row mb-6 col-md-6 " style=" background-color:	#FA8072 ">
                            <div class="card card-pricing text-center px-3 mb-4" >
                                <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Starter</span>
                                <div class="bg-transparent card-header pt-4 border-0">
                                    <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">$<span class="price">3</span><span class="h6 text-muted ml-2">/ per month</span></h1>
                                </div>
                                <div class="card-body pt-0">
                                    <ul class="list-unstyled mb-4">
                                        <li>Up to 5 users</li>
                                        <li>Basic support on Github</li>
                                        <li>Monthly updates</li>
                                        <li>Free cancelation</li>
                                    </ul>
                                    <button type="button" class="btn btn-success mb-3">Order now</button>
                                </div>
                            </div>
                        </div>
            </div>
    </div>

</div>

@endsection
<style>
    .headerprof{
        margin-top:100px;
        width:100%;
    }
    p{
     color:#666D96;   
    }
    .card-pricing.popular {
    z-index: 1;
    border: 3px solid #007bff;
}
.card-pricing .list-unstyled li {
    padding: .5rem 0;
    color: #6c757d;
}
.header-img{
    height:500px;
    width:100%;
}
</style>