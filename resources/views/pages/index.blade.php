@extends('layouts.basic')
@section('content')
    

<div> 
    <div id="intro" class="view">
        <div  class="mask flex-center rgba-black-strong">
             <div class=" container text-center text-white">
                 <h1 class="font3 custom-header text-primary fadeIn">WAVES</h1>
                 <p class="">Join with us to reserve your whale watching boat rides .surf through whale watching boats and find the most suited,compare with facilitiies and different price ranges
                 </p>
                    <a href="/reserve"><button class="btn btn-outline-info">RESERVE YOUR RIDE</button></a>
            </div> 
        </div>
    </div>
</div>
  
<div class="row">
    <div class="container">
            <div class="col-md-6">
                <img src="" alt="">
            </div>
            <div class="col-md-6">

            </div>
    </div>
    
</div>


<div id="boxone">
    <div class="container">
        <div class="row">
     
                <div class="col-md-4">
                        <div class="custom_padding">
                            <div class=" text-center" >
                                <img src="img/sv.png" alt="" style="height:200px;width:100% " class="">
                                <h1 class="">Book your hotel Room</h1>
                                <p>Save time and money on your accommodation search with millions of ... You are now online ...
                                     Find your ideal hotel and compare prices from different websites ... 
                                    From budget hostels to luxury suites, trivago makes it easy to book online.</p>
                                
                            </div>
                        </div>    
                   </div>    

                   <div class="col-md-4">
                        <div class="custom_padding">
                            <div class=" text-center" >
                                <img src="img/ffs.jpg" alt="" style="height:200px;width:100% " class="">
                                <h1 class="">Reserve your ride</h1>
                                <br><br>
                                <p>Each season brings a whole different array of scenery and species 
                                    to the marsh – it’s not just a boat ride. Call and reserve your
                                     spot on the boat now and get ready to experience the largest mamals marsh in SRI LANKA.</p>
                               
                            </div>
                        </div>    
                   </div>    

                   
           <div class="col-md-4">
                <div class="custom_padding">
                    <div class="text-center" >
                        <img src="img/dv.jpg" alt="" style="height:200px;width:100% " class="">
                        <h1 class="">Arrange your transport</h1>
                        <p>Reserve your transport to Hotel. Let our concierge team arrange your transportation and reach our hotel with convenience.
                 </p>
                        
                    </div>
                </div>    
           </div>    

       
        </div>
</div>
</div>


<div id="boxtwo" class="view">
     <div class="mask flex-center rgba-black-strong text-white">
        <div class="container">
            <div class="row">
                <h1>START YOUR CAREER WITH WAVES</h1>
            </div>
            <br> <br>
            <div class="row">

                <div class="col-md-6">
                    We are wormly welcome anyone to our Waves tourism management system. Join with us as a boat owner,
                    and you can gain more and more profits through whale watching trips. This will be really
                    easy for you because we are available 24X7 anywhere. 
                    <br> <br>
                    
                   

                </div>
                <div class="col-md-6">
                <!-- Login and registration buttons -->
                    @guest
                    <div class="row">
                    <button class="btn btn-danger btn-lg"><a  href="{{ route('login') }}">{{ __('Login') }}</a></button>
                            
                    </div>
                    <div class="row">
                    <button class="btn btn-success btn-lg"><a href="{{ route('register') }}">{{ __('Register') }}</a></button>
                                
                    </div>
                        
                    @endguest 
                      
                </div>

            </div>
            
            
                
             
        </div>
     </div>
</div>



<div id="boxthree">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                    <div class="custom_padding">
                            <div class="card text-center" >
                                    <div class="view overlay zoom">
                                            <img src="img/speedboat.jpg" alt="" style="height:250px;width:100% " class="zoom">
                                            <div class="mask flex-center waves-effect waves-light">
                                              
                                            </div>
                                          </div>
                                
                                <h1 class="">Speed Boat Whale Tour</h1>
                                <p>Watching tour that reduce travelling time and increases Watching time. 
                                it's unique private tour and you can enjoy much than shared tour.</p>
                                <p>
                                    <li>Passenger Capacity: 5max</li>
                                    <li>Maximum Speed:30knots</li>
                                    <li>Tour Time:2Hours</li>
                                    <li>Tea,Coffee,Breakfast/Water Included</li>
                                    </ul>
                                    </p>
                                
                                <a href="/home" class="btn btn-primary">SEE MORE</a>
                                      
                            </div>
                        </div>    
            </div>
            
            
            <div class="col-md-6">
                    <div class="custom_padding">
                            <div class="card text-center" >
                                    <div class="view overlay zoom">
                                            <img src="img/normalboat.jpg" alt="" style="height:250px;width:100% " class="zoom">
                                            <div class="mask flex-center waves-effect waves-light">
                                              
                                            </div>
                                          </div>
                                
                                <h1 class="">Normal Boat Whale Tour</h1>

                                <p>
                                You can feel the beauty of the ocean and can observe whales/dolphins in a close view.
                                This will good for you to spend your leisure time meaningfully.
                                </p>
                                <p>
                                <li>Passenger Capacity: 50max</li>
                                <li>Maximum Speed:12knots</li>
                                <li>Tour Time:5Hours</li>
                                <li>Breakfast/Water Included</li>

                                </p>
                                <a href="/home" class="btn btn-primary">SEE MORE</a>
                                   
                            </div>
                        </div>    
            </div>
            

        </div>

        <div class="row">
                <div class="col-md-6">
                        <div class="custom_padding">
                                <div class="card text-center" >
                                    
                                    <div class="view overlay zoom">
                                            <img src="img/luxuryboat.jpg" class="img-fluid " alt="zoom"  style="height:250px;width:100% ">
                                            <div class="mask flex-center waves-effect waves-light">
                                              
                                            </div>
                                          </div>
                                    <h1 class="">Luxury Family Whale Tour</h1>
                                    <p>You can spend really good time with family since this is a family based tour.
                                    In this boat sofa,a washroom, bed room with two beds are available only for you.
                                
                                </p>
                                <p>
                                <li>Passenger Capacity: 5max</li>
                                <li>Maximum Speed:20knots</li>
                                <li>Tour Time:10Hours</li>
                                <li>Breakfast,Lunch,Dinner/Water Included</li>

                                </p>
                                    <a href="/home" class="btn btn-primary">SEE MORE</a>
                                          
                                </div>
                            </div>    
                </div>
                
                
                <div class="col-md-6">
                        <div class="custom_padding">
                                <div class="card text-center" >
                                    
                                    <div class="view overlay zoom">
                                            <img src="img/smallboat.jpg" alt="" style="height:250px;width:100% " class="zoom">
                                            <div class="mask flex-center waves-effect waves-light">
                                              
                                            </div>
                                          </div>
                                    <h1 class="">Small Boat Whale Tour</h1>
                                    <p>Watching tour that reduce travelling time and increases Watching time. 
                                it's unique private tour and you can enjoy much than shared tour.</p>
                                <p>
                                    <p>
                                    <li>Passenger Capacity: 3max</li>
                                    <li>Maximum Speed:25knots</li>
                                    <li>Tour Time:3Hours</li>
                                    <li>Breakfast/Water Included</li>
                                    </p>
                                      <button class="btn btn-primary">SEE MORE</button>
                                       
                                </div>
                            </div>    
                </div>
                
    
            </div>

    </div>
</div>



<div id="boxfour" class="view">
    <div class="mask flex-center rgba-black-strong">
       {{--  --}}
       <div class="container">
           <div class="row">
               <div class="col-md-6" style="padding-top:80px">
                    <p class="text-white">
                            One of the best places in the world to see one of the only recorded resident blue whale 
                            colonies in their natural habitat. Dolphins are regularly spotted on whale watching trips
                             organized from Mirissa and Dondra head on the south coast. The BBC documentary titled “Ocean
                              Giants” featuring the mesmeric world of Whales and Dolphins, and the scientist’s effort to shed 
                              light on their habits and why they grow so large were filmed around Sri 
                            Lanka and according to them 30 Blue Whales were sighted in a single day!
                    </p>
                    <a href="/whales" class="btn btn-outline-warning">SEE MORE DETAILS</a>
                </div>
               <div class="col-md-6">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="padding-top:50px" >
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                <img class="d-block w-100" src="img/bb.jpeg" alt="First slide" style="height:300px">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/q.jpg" alt="Second slide" style="height:300px">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100" src="img/whale.jpg" alt="Third slide" style="height:300px">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
               </div>
           </div>
       </div>
       {{--  --}}
    </div>
</div>
 <br>
<div class="">
    <div class="row">
            <div class="view overlay zoom col-md-4">
                    <img src="img/photo-1519566335946-e6f65f0f4fdf.jpg" class="img-fluid " alt="zoom">
                    <div class="mask flex-center waves-effect waves-light">
                      <p class="white-text">Zoom effect</p>
                    </div>
            </div>
            
            <div class="view overlay zoom col-md-4">
                        <img src="img/lk.jpg" class="img-fluid " alt="zoom">
                        <div class="mask flex-center waves-effect waves-light">
                          <p class="white-text">Zoom effect</p>
                        </div>
            </div>

            <div class="view overlay zoom col-md-4">
                    <img src="img/www.jpeg" class="img-fluid " alt="zoom">
                    <div class="mask flex-center waves-effect waves-light">
                      <p class="white-text">Zoom effect</p>
                    </div>
            </div>
    </div>
    <br>

    <div class="row">
            <div class="view overlay zoom col-md-4">
                    <img src="img/maui-whale-watch-cruise.jpg" class="img-fluid " alt="zoom">
                    <div class="mask flex-center waves-effect waves-light">
                      <p class="white-text">Zoom effect</p>
                    </div>
            </div>
            
            <div class="view overlay zoom col-md-4">
                        <img src="img/t.jpeg" class="img-fluid " alt="zoom">
                        <div class="mask flex-center waves-effect waves-light">
                          <p class="white-text">Zoom effect</p>
                        </div>
            </div>

            <div class="view overlay zoom col-md-4">
                    <img src="img/bb.jpeg" class="img-fluid " alt="zoom">
                    <div class="mask flex-center waves-effect waves-light">
                      <p class="white-text">Zoom effect</p>
                    </div>
            </div>
    </div>
    <br>
    <div class="row">

    </div>

</div>
    
    

<div class="">
       
        <!--The div element for the map -->
        <div id="map"></div>
        <script>
    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      var uluru = {lat:5.948779, lng:80.449292};
      // The map, centered at Uluru
      var map = new google.maps.Map(
          document.getElementById('map'), {zoom: 17, center: uluru});
      // The marker, positioned at Uluru
      var marker = new google.maps.Marker({position: uluru, map: map});
    }
        </script>
        <!--Load the API from the specified URL
        * The async attribute allows the browser to render the page while the API loads
        * The key parameter will contain your own API key (which is not needed for this tutorial)
        * The callback parameter executes the initMap() function
        -->
        <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIr_1mumk0EcpdtP_hT0UCMVTX4b7xy0s&callback=initMap">
        </script>
</div>

    


@include('include.footer')
@endsection
<style>
        /* Set the size of the div element that contains the map */
       #map {
         height: 400px;  /* The height is 400 pixels */
         width: 100%;  /* The width is the width of the web page */
        }
        .customimg{
           
        }
        
</style>