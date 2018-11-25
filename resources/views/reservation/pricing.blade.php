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
						
						<input type="" value="{{$reservationdetails->ownerid}}" name="owner_id">
						<input type="hidden" value="{{$reservationdetails->start_date}}" name="start_date">
						<input type="hidden" value="{{$reservationdetails->boatid}}" name="boat_id">
						<input type="hidden" value="{{$reservationdetails->availableseats}}" name="seatsavailable" id="available_seats">
						<input type="hidden" value="{{$reservationdetails->reservationid}}" name="res_id">
						
							<input type="hidden" value="{{$pricing->price_per_head}}" name="priceperhead" id="priceperhead">
						
					
								   
						{{-- end hidden input fields --}}
						<div class="col-md-6 ">
							<input type="submit" class="btn btn-primary btn-md" value="ADD TRIP TO THE CALENDER">
						</div>
			   </div>
			</form>			
	</div>
	<div class="col-md-3">
			<div class="card">

					<!-- Card image -->
					<img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">
				  
					<!-- Card content -->
					<div class="card-body">
				  
					  <!-- Title -->
					  <h3>price you have to pay is </h3>
					  <!-- Text -->
					  <p class="card-text" id="price">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					  <!-- Button -->
					  <h3 ></h3>
					  <a href="#" class="btn btn-primary" id="button">Button</a>
				  
					</div>
				  
				  </div>
				  <!-- Card -->
				  
						  
			</div>
			<!-- Card -->	
  
					
</div>
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
		 }
		
    });


	
});
</script>


<!-- Bootstrap core JavaScript -->
{{-- <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../../js/mdb.min.js"></script> --}}

@endsection