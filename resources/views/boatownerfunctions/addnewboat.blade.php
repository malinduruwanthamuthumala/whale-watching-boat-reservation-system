@extends('layouts.userprofileboat')
<link rel="stylesheet" href="js/formvalidation.js">
@section('content')

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
                                <input type="text" id="FirstName" class="form-control" name="fname">
                                <label for="FirstName">Name of the boat</label>
                            </div>
                        </div>
                        <div class="col">
                        
                            <div class="md-form">
                                <input type="text" id="Regno" class="form-control" name="regno">
                                <label for="Regno">Government Registration number</label>
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

                    {{-- location --}}
                    <select class="mdb-select md-form form-control" name="location">
                        <option value="" disabled selected>Choose your location</option>
                        <option value="mirissa">mirissa</option>
                        <option value="trincomalee">Trincomalee</option>
                        <option value="kalpitiya">colombo</option>
                    </select>
                
                    
                    <!-- number of insured passengers-->
                    <div class="md-form">
                        <input type="text" id="noofseats" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="noofseats">
                        <label for="noofseats">No of seats</label>
                        
                    </div>
                    
                    
                    


                    <!-- Phone number -->
                    <div class="md-form">
                        <input type="password" id="Phone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="tp">
                        <label for="Phone">Phone number</label>
                        
                    </div>

                    <!-- number of insured passengers-->
                    <div class="md-form">
                        <input type="text" id="noofinsuredpasengers" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="noofinsuredpassengers">
                        <label for="noofinsuredpasengers">No of insured passengers</label>
                        
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
                        
                    </div>

                    <div class="md-form">
                        <input type="text" id="bankname" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="bankname">
                        <label for="bankname">Name of the bank</label>
                        
                    </div>

                    <!-- Sign up button -->
                <input type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">

                    <!-- Social register -->
                    <p>or sign up with:</p>

                    <a type="button" class="btn-floating btn-fb btn-sm">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a type="button" class="btn-floating btn-tw btn-sm">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a type="button" class="btn-floating btn-li btn-sm">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a type="button" class="btn-floating btn-git btn-sm">
                        <i class="fa fa-github"></i>
                    </a>

                    <hr>

                    <!-- Terms of service -->
                    <p>By clicking
                        <em>Sign up</em> you agree to our
                        <a href="" target="_blank">terms of service</a> and
                        <a href="" target="_blank">terms of service</a>. </p>

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
        <script src="js/formvalidation.js"></script>
        <script>


        </script>