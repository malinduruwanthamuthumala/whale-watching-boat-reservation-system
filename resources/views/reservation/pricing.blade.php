@extends('layouts.basic')

@section('content')
<script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../../js/popper.min.js"></script>


<div class="row" style="margin-top:100px;background-color:#154360 ;" id="intro1" >
	<div class="col-md-1">
		<div>
			<p id="p"></p>
		</div>
	</div>
	<div class="col-md-7" style="padding-left:105px;padding-top:20px">
			<form action="/invoice" method="post">
				@csrf
			   <div class="row">
				   <div class="col-md-12">
					   @if(Session::has('success'))
						<div class="alert alert-success">{{session::get('success')}}</div>
					   @elseif(Session::has('warning'))
						<div class="alert alert-danger">{{session::get('warning')}}</div>
					   @endif 
					</div>
					
					<div class="col-md-4">
						<div class="form-group">
							{{-- first name --}}
							<label for="" class="text-white">First Name</label>
							<div>
							
								<input type="text" name="first_name" class="form-control" id="fname" >
								<p style="color:red" id="fname_error"></p>
								{!! $errors->first('first_name','<p class="alert alert-danger">:message</p>')!!}
							</div>

						</div>

					</div>
					{{-- end fname --}}
					

						{{-- last name --}}
						<div class="col-md-4">
								<div class="form-group">
									<label for="" class="text-white">Last Name</label>
									<div>
										<input type="text" class="form-control" name="lname" id="lname">
										<p style="color:red" id="lname_error"></p>
										{!! $errors->first('last_name','<p class="alert alert-danger">:message</p>')!!}
									</div>
	
								</div>
	
							</div>
						{{-- last name --}}

						{{-- number of seats --}}
						<div class="col-md-8">
								<div class="form-group" >
									<label for="" id="lseats" class="text-white">number of seats</label>
									<div>
										
										
										<input type="number" name="seats" class="form-control" id="seats">
										{!! $errors->first('seats','<p class="alert alert-danger">:message</p>')!!}
										<p id="seats_error" style="color:red"></p>
									</div>
								</div>
						</div>
						{{-- end  number of seats --}}
						
						{{-- nic number --}}
						<div class="col-md-8">
								<div class="form-group">
									<label for="" class="text-white">National Id Card Number or Pssport ID</label>
									<div>
										<input type="text" name="nic" class="form-control" id="nic">	
										<p style="color:red" id="nic_error"></p>
										{!! $errors->first('nic','<p class="alert alert-danger">:message</p>')!!}
									</div>
	
								</div>
	
								
							</div>
						{{-- end nic number --}}
						{{-- Telephone number --}}
						<div class="col-md-8">
								<div class="form-group">
									<label for="" class="text-white">Telephone number</label>
									<div>
										  <input type="text" class="form-control" name="telephone" id="tel">
										  <p style="color:red" id="tel_error"></p>
										{!! $errors->first('telephone','<p class="alert alert-danger">:message</p>')!!}
									</div>
	
								</div>
	
								<div>
	
								</div>
							</div>
						{{-- end telephone number --}}

						{{-- email --}}
						<div class="col-md-8">
								<div class="form-group">
									<label for="" class="text-white"	>email</label>
									<div>
										  <input type="email" class="form-control" name="email" id="email">
										  <p style="color:red" id="email_error"></p>
										{!! $errors->first('email','<p class="alert alert-danger">:message</p>')!!}
									</div>
	
								</div>
	
								
							</div>
						{{-- endemail --}}

						
						{{-- hidden input fields --}}
						
						<input type="hidden" value="{{$reservationdetails->ownerid}}" name="owner_id">
						<input type="hidden" value="{{$reservationdetails->start_date}}" name="start_date">
						<input type="hidden" value="{{$reservationdetails->boatid}}" name="boat_id">
						<input type="hidden" value="{{$reservationdetails->availableseats}}" name="seatsavailable" id="available_seats">
						<input type="hidden" value="{{$reservationdetails->reservationid}}" name="res_id">
						<input type="hidden" value="{{$boattype}}" name="type" id="type">
							<input type="hidden" value="{{$pricing->price}}" name="priceperhead" id="priceperhead">
						<input type="hidden" value="{{$pricing->discount}}" id="disc">
					
								   
						{{-- end hidden input fields --}}
						
			   </div>
					
	</div>
	<div class="col-md-3">
			<div class="card">

				
					<div class="card-body">
				  
					  <!-- Title -->
					<h3>price per head: $ {{$pricing->price}}.00</h3>
					  <p>Number of seats: <span id="numseats"></span> </p>
					  <p>Total : USD <span id="tot"></span></p>
					<p><b>Discounts:{{$pricing->discount}}%</b></p>
					  <p><b>Final payement: USD <span id="price"></span></b><p>
					 

						<ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="pill" href="#nav-tab-card">
								<i class="fa fa-credit-card"></i> Credit Card</a></li>
							
						</ul>

							
						<div class="form-group">
							<label for="username">Full name (on the card)</label>
							<input type="text" class="form-control" name="username" placeholder="" required="">
						</div> 
				  
						<div class="form-group">
							<label for="cardNumber">Card number</label>
							<div class="input-group">
								<input type="text" class="form-control" name="cardNumber" placeholder="">
								<div class="input-group-append">
									<span class="input-group-text text-muted">
										<i class="fab fa-cc-visa"></i>   <i class="fab fa-cc-amex"></i>   
										<i class="fab fa-cc-mastercard"></i> 
									</span>
								</div>
							</div>
						</div> 

						<div class="row">
							<div class="col-sm-8">
								<div class="form-group">
									<label><span class="hidden-xs">Expiration</span> </label>
									<div class="input-group">
										<input type="number" class="form-control" placeholder="MM" name="">
										<input type="number" class="form-control" placeholder="YY" name="">
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
									<input type="number" class="form-control" required="">
								</div> <!-- form-group.// -->
							</div>
						</div>

						<div class="col-md-6 ">
							<input type="submit" class="btn btn-danger btn-md" value="CONFIRM RESERVATION" onClick="return empty()" id="check">
						</div>
					</div>
				  
				  </div>
				  <!-- Card -->
				  
						  
			</div>
			<!-- Card -->	
  
					
</div>
								
</form>								
							
					

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	var type=$('#type').val();
	if(type=="family"){
		$('#seats').val('10');
		$('#seats').hide();
		$('#lseats').hide();
			$('#numseats').text('10');
			
		var discont=$('#disc').val();
		var priceperhead=$('#priceperhead').val();
		var discountedprice=priceperhead*(discont/100);
		var tot=priceperhead-discountedprice;
		$("#price").text('$'+  tot);
			
	}
    $("#seats").focusout(function(){
		
		// alert('abcd');
		 var availableseats=parseInt($('#available_seats').val(),10);
		//  alert(availableseats);
		 var seats=parseInt($('#seats').val(),10);
		//  alert(seats)
		 var a=availableseats-seats;
		//  alert(a);
		
		if(a<="0" || seats=="0"){
			$('#seats_error').text("There is only " +" "+availableseats+" "+ "seats available for your reservation");
			$("#seats").css("background-color", "#FADBD8  ");
		}
	
	else{
		$("#seats").css("background-color", "white ");
		 $('#seats_error').text("");
		 var priceperhead=$('#priceperhead').val();
			var discont=$('#disc').val();
		 	var price=seats*priceperhead;
			 var discountedprice=price*(discont/100);
			 var finalprice= price-discountedprice;
			$("#price").text('$'+ finalprice );
			$('#numseats').text(seats);
			$('#tot').text(price);
			
		 }
		
    });

  $("#check").click(function(){
	var firstname = $('#fname').val(); 
	var lastname =$('#lname').val(); 
	var tel=$('#tel').val();
	var email=$('#email').val();
	var nic=$('#nic').val();
	var email_regex = '/^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/';
	
	
	var x=0;
	if (firstname.length == 0) {
	$('#fname_error').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
	$("#fname").focus();
	x=1;
	
}
if (firstname.length == 0) {
	$('#nic_error').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
	$("#nic").focus();
	x=1;
	
}

if (lastname.length == 0) {
	$('#lname_error').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
	$("#lname").focus();
	x=1;
	
}
if (tel.length == 0) {
	$('#tel_error').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
	$("#tel").focus();
	x=1;
	
}
if (email.length == 0) {
	$('#email_error').text("* All fields are mandatory *"); // This Segment Displays The Validation Rule For All Fields
	$("#emai").focus();
	x=1;
	
}

if(x==1){
	return false;
}
    });
   
});
</script>

<style>
.abc{
	
}
</style>
<!-- Bootstrap core JavaScript -->
{{-- <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../../js/mdb.min.js"></script> --}}

@endsection