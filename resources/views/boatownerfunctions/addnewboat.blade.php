@extends('layouts.userprofileboat')

@section('content')
<div class="col-md-12">
        @if(Session::has('success'))
         <div class="alert alert-success">{{session::get('success')}}</div>
        @elseif(Session::has('warning'))
         <div class="alert alert-danger">{{session::get('warning')}}</div>
        @endif 
     </div>
        <div>
        <h3>PLEASE FILL THE FOLLOWING DETAILS</h3>
            <div class="container" style="margin-top:100px">

            <div class="row">
               
                <div class="col-md-10 ">
                <!-- Material form register -->
        <div class="card">

            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Sign up</strong>
            </h5>

            <!--Card content-->
            <div class="card-body px-lg-5 pt-0">

                <!-- Form -->
                <form class="text-center" style="color: #757575;"  method="POST" action="/boatregistration">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <!-- Boat Name -->
                            <div class="md-form">
                                <input type="text" class="form-control" name="name" id="fname1">
                                <label for="FirstName">Name of the boat</label>
                            </div>
                            {!! $errors->first('name','<p class="alert alert-danger">:message</p>')!!}
                        </div>
                        
                        <div class="col">
                        
                            <div class="md-form">
                                <input type="text" id="Regno" class="form-control" name="regno">
                                <label for="Regno">Government Registration number</label>
                                {!! $errors->first('regno','<p class="alert alert-danger">:message</p>')!!}
                            </div>

                        </div>
                    </div>

                    {{-- boat type --}}
                    <select class="mdb-select md-form form-control" name="btype">
                        <option value="" disabled selected>Choose your boat type</option>
                        <option value="Normal">Normal Boats</option>
                        <option value="family">family boat</option>
                        <option value="luxury">luxury boat</option>
                    </select>
                    {!! $errors->first('btype','<p class="alert alert-danger">:message</p>')!!}
                    {{-- location --}}
                    <select class="mdb-select md-form form-control" name="location">
                        <option value="" disabled selected>Choose your location</option>
                        <option value="mirissa">mirissa</option>
                        <option value="trincomalee">Trincomalee</option>
                        <option value="kalpitiya">colombo</option>
                    </select>
                    {!! $errors->first('location','<p class="alert alert-danger">:message</p>')!!}
                    
                    <!-- number of insured passengers-->
                    <div class="md-form">
                        <input type="text" id="noofseats" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="noofseats">
                        <label for="noofseats">No of seats</label>
                        {!! $errors->first('regno','<p class="alert alert-danger">:message</p>')!!}
                        
                    </div>
                    
                    
                    


                    <!-- Phone number -->
                    <div class="md-form">
                        <input type="password" id="Phone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="tel">
                        <label for="Phone">Phone number</label>
                      
                        
                    </div>

                    <!-- number of insured passengers-->
                    <div class="md-form">
                        <input type="text" id="noofinsuredpasengers" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="noofinsuredpassengers">
                        <label for="noofinsuredpasengers">No of insured passengers</label>
                        {!! $errors->first('noofinsuredpassengers','<p class="alert alert-danger">:message</p>')!!}
                        
                    </div>
                    
                    <div class="md-form">
                        <input type="text" id="insuarancecompany" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="insuarancecompany">
                        <label for="insuarancecompany">Insuarance company name</label>
                        
                    </div>

                    <div class="md-form">
                        <input type="text" id="insuaranceregno" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="insuaranceregno">
                        <label for="insuaranceregno">Insuarance registration number</label>
                        
                    </div>
                    {{-- bank account details --}}

                    <div class="md-form">
                        <input type="text" id="bankaccno" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="bankaccno">
                        <label for="bankaccno">Bank account number</label>
                        {!! $errors->first('bankaccno','<p class="alert alert-danger">:message</p>')!!}
                        
                    </div>

                    <div class="md-form">
                        <input type="text" id="bankname" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="bankname">
                        <label for="bankname">Name of the bank</label>
                        {!! $errors->first('bankname','<p class="alert alert-danger">:message</p>')!!}
                        
                    </div>

                    <!-- Sign up button -->
                <input type="submit" class="btn btn-outline-info " id="check">

                    <!-- Social register -->
                    

                </form>
                <!-- Form -->

            </div>

        </div>
        <!-- Material form register -->
                </div>
                    <div class="col-md-2">
                    </div>
                    
            </div>   
        
            </div>
        </div>


        <div>
            <!-- Material form register -->

        @endsection()
        
       
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script>
             $(document).ready(function(){
                var input1=$('#fname1').val();
            
           
         
           $("#check").click(function(){
              
            
            });
           
        
            
        });
           
            </script>
        