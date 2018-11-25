@extends('layouts.basic')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
@section('content')
<div class="row">
        <div class=" col-md-12">
        <img src="storage/cover_images/{{$home->cover_image}}" alt="" class="header-img ">
        </div>
        
    </div>
    
<div class=" container headerprof">
   
<div class="row"  style="margin-top:-250px">

        <div class="col-md-4  " >
            <img src="storage/profile_image/{{$home->profile_image}}" alt="" class="img-fluid" style="">
            <div style=" background-color:	 ;width:100%" >
                <a href="" class="btn btn-default">change photo</a>
            </div>
        </div>
        <div  class="col-md-1"></div>
        <div class="col-md-7  card" style="padding-top:10">
        <h1>{{$home->boatname}}</h1>
            <br>
        <p>{{$home->body}}</p>
               
               <div class="">
                   <br>
                    <h5>BOAT RESERVATION:<span class="badge red">NOT ONGOING</span></h5>
                    <h5>RESERVATION DATE:<span class="badge blue">NOT DECLARED</span></h5>
                </div>
                <div class="row" style=" background-color:	#FA8072 " >
                        <div class="col-md-3" style="margin-top:10px">
                             <button type="button" class="btn btn-primary">DEACTIVATE</button>
                        </div>
                        <div class="col-md-2" style="margin-top:10px">
                             <a href="boats/create"><button type="button" class="btn btn-primary">ADD BOAT</button></a>
                        </div>
                        <div class="col-md-4" style="margin-top:10px">
                         <a href="#ex1" rel="modal:open"><button class="btn btn-primary">START NEW RESERVATION</button></a></p>
                        </div>
                        <div class="col-md-3" style="margin-top:10px">
                            <button class="btn btn-primary">DELETE BOAT</button>

                        </div>
                        
             </div>
        </div>
        
</div>   
<div class="row mb-5 mt-5 " >
    <div class="col-md-4 card jumbotron" style="padding-top:50px">
      <?php  $name=auth()->user()->name; ?>
        <p >Ownership:<span style="color:black"> <?php echo  "$name"    ?></span></p>
        <p>boat id:<span style="color:black">{{$home->boatid}}</span></p>
        <p>registration no:<span style="color:black">{{$home->registrationnumber}}</span></p>
        <p>Available seats:<span style="color:black">{{$home->availableseats}}</span></p>
        <p>Reserved seats:<span style="color:black">{{$home->receivedseats}}</span></p>
        <p>next trip date:<span style="color:black">{{$home->reservationdate}}</span></p>
        <p>Location:mirissa harbour</p>
        <p>starts at:</p>
        <a href="/boats/{{$home->boatid}}/edit" class="btn btn-primary">EDIT</a>
        @include('include.messages')
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-7 jumbotron">
        <div class="row ">
            <div class="col-md-4 " style="padding:20px"><h3>Earnings:$150</h3>
                <button class="btn btn-primary">Receive payement</button>
            </div>
            
        <div class="col-md-4 " style="padding:20px">
                <h3>Total Rides:22</h3>
                <button class="btn btn-primary ">VIEW REPORT</button>
        </div>
        <div class="col-md-4 " style="padding:20px">
            <h3>Price:Rs 3500</h3>
            <button class="btn btn-primary">CHANGE PRICE</button>
        </div> 
        </div>
          <div class="row ">
            <div class="col-md-4">
                <div class="text-center ">
                    <h4>TOTAL EARNINGS</h4>
                    <p>$501</p>
                    <br>
                    <button class="btn btn-primary">TRANSACTION HISTORY</button>
                </div>
            </div> 
            <div class="col-md-4">
                <div class="text-center">
                    <h4>NUMBER OF BOATS</h4 >
                    <p>1</p>
                    <button class="btn btn-primary">EDIT DETAILS</button>
                </div>
                </div>
            </div> 
            
        </div> 
    </div>

</div>
{{-- modal for reservation --}}
<div class="row">
    <div class="col-md-3 ">

    </div>

    <div id="ex1" class="modal align-center col-md-6 col-md-offset-3" style="margin-top:200px; margin-left:400px; height:400px; ">
         <div>
             <form action="" class="form-froup">
                 <label for="">SELECT A DATE</label>
                 <input type="date" class="form-control">

                 <label for="">Available seats</label>
                 <input type="text" class="form-control">

                 <label for="">Start time</label>
                 <input type="text" class="form-control">
                <br>
                 <input type="submit" class="btn btn-primary" value="Make Reservation Start">
                 <input type="rset" class="btn btn-danger" value="reset">

             </form>
         </div>
    </div>
    <div class="col-md-3">

    </div>
</div>
    
        
    
</div>

      
      <!-- Link to open the modal -->
      

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
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
body{
    /* background-image: url("img/t.jpeg"); */
}
</style>