@extends('layouts.userprofileadmin')
@section('content')

<div style="margin-top:100px;margin-left:-100px">

    <table class="table">
           <thead class="black white-text">
             <tr>
               <th scope="col">Payement Id</th>
               <th scope="col">pricing plan</th>
               <th scope="col">price</th>
              
              
               <th></th>
               
               <th scope="col"></th>
               <th></th>
             </tr>
           </thead>
           <tbody>
                
                  @foreach($pricing as $price)
                 
                         <tr>
                            
                         <th >{{$price->pricing_id}}</th>
                         <th >{{$price->pricing_plan}}</th>
                         
                         <th >
                                
                            
                        <form action="/update_pricing">
                         <div class="row">
                             <div class="col-md-5">
                                <input type="text" value="{{$price->price}}" placeholder="{{$price->price}}" class="form-control" name="price">
                             </div>
                             <div class="col-md-5">
                                  
                                <input type="hidden" value="{{$price->pricing_id}} " name="id"> 
                                <input type="submit" value="update pricing plan" class="btn btn-success btn-md">
                             </div>
                               
                            </div>   
                            
                     
                        </form>
                        </th>
                        
                        
                        

                      
                         </tr>
                        
                  @endforeach
                  
              
           </tbody>
          
         </table>


         <table class="table">
                <thead class="black white-text">
                  <tr>
                    <th scope="col">Payement Id</th>
                    <th scope="col">pricing plan</th>
                    <th scope="col">Discounts</th>
                   
                   
                    <th></th>
                    
                    <th scope="col"></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                     
                       @foreach($pricing as $price)
                      
                              <tr>
                                 
                              <th >{{$price->pricing_id}}</th>
                              <th >{{$price->pricing_plan}}</th>
                              
                              <th >
                                     
                                 
                             <form action="/update_discounts">
                              <div class="row">
                                  <div class="col-md-5">
                                     <input type="text" value="{{$price->discount}}" placeholder="{{$price->discount}}" class="form-control" name="discount">
                                  </div>
                                  <div class="col-md-5">
                                       
                                     <input type="hidden" value="{{$price->pricing_id}} " name="id"> 
                                     <input type="submit" value="update discounts" class="btn btn-info btn-md">
                                  </div>
                                    
                                 </div>   
                                 
                          
                             </form>
                             </th>
                             
                             
                             
     
                           
                              </tr>
                             
                       @endforeach
                       
                   
                </tbody>
               
              </table>
              
         
        
</div>
@endsection