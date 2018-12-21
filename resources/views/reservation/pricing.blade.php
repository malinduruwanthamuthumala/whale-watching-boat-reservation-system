@extends('layouts.basic')

@section('content')
<script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../../js/popper.min.js"></script>


<div class="row" style="margin-top:100px">
	<div class="col-md-1">
		<div>
			<p id="p"></p>
		</div>
	</div>
	<div class="col-md-7">
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
							<label for="">First Name</label>
							<div>
							
								<input type="text" name="first_name" class="form-control">
								{!! $errors->first('first_name','<p class="alert alert-danger">:message</p>')!!}
							</div>

						</div>

					</div>
					{{-- end fname --}}
					

						{{-- last name --}}
						<div class="col-md-4">
								<div class="form-group">
									<label for="">Last Name</label>
									<div>
										<input type="text" class="form-control" name="lname">
										{!! $errors->first('last_name','<p class="alert alert-danger">:message</p>')!!}
									</div>
	
								</div>
	
							</div>
						{{-- last name --}}

						{{-- number of seats --}}
						<div class="col-md-8">
								<div class="form-group">
									<label for="">number of seats</label>
									<div>
										
										
										<input type="number" name="seats" class="form-control" id="seats">
										{!! $errors->first('seats','<p class="alert alert-danger">:message</p>')!!}
									</div>
								</div>
						</div>
						{{-- end  number of seats --}}
						
						{{-- nic number --}}
						<div class="col-md-8">
								<div class="form-group">
									<label for="">National Id Card Number</label>
									<div>
										<input type="text" name="nic" class="form-control">	
										{!! $errors->first('nic','<p class="alert alert-danger">:message</p>')!!}
									</div>
	
								</div>
	
								
							</div>
						{{-- end nic number --}}
						{{-- Telephone number --}}
						<div class="col-md-8">
								<div class="form-group">
									<label for="">Telephone number</label>
									<div>
										  <input type="text" class="form-control" name="telephone">
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
									<label for="">email</label>
									<div>
										  <input type="text" class="form-control" name="email">
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
						
							<input type="hidden" value="{{$pricing->price}}" name="priceperhead" id="priceperhead">
						
					
								   
						{{-- end hidden input fields --}}
						
			   </div>
					
	</div>
	<div class="col-md-3">
			<div class="card">

				
					<div class="card-body">
				  
					  <!-- Title -->
					<h3>price per head: $ {{$pricing->price}}.00</h3>
					  <p><b>Number of seats: <span id="numseats"></span></b> </p>
					<p><b>Discounts:{{$pricing->discount}}%</b></p>
					  <p><b>TOTAL :<span id="price"></span></b><p>
					 

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
							<input type="submit" class="btn btn-danger btn-md" value="CONFIRM RESERVATION">
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
    $("#seats").focusout(function(){
		// alert('abcd');
		 var availableseats=parseInt($('#available_seats').val(),10);
		//  alert(availableseats);
		 var seats=parseInt($('#seats').val(),10);
		//  alert(seats)
		 var a=availableseats<seats;
		//  alert(a);
		
		if(a){
			alert("There is only " +" "+availableseats+" "+ "seats available for your reservation");
		}	
	else{
		 var priceperhead=$('#priceperhead').val();
			
		 	var price=seats*priceperhead;
			$("#price").text('$'+ price );
			$('#numseats').text(seats);
		 }
		
    });


	
});
</script>


<!-- Bootstrap core JavaScript -->
{{-- <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../../js/mdb.min.js"></script> --}}

@endsection