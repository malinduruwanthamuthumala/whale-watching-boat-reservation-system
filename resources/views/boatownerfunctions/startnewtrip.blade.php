@extends('layouts.userprofileboat')
@section('content')
<div class="container" style="margin-top:100px;margin-left:-100px">
        <div class="card">
                <h6 class="card-header primary-color white-text">Start trips to Receive bookings</h6>
                <div class="card-body">
                  <form action="/addtrip" method="post">
                    @csrf
                   <div class="row">
                       <div class="col-md-12">
                           @if(Session::has('success'))
                            <div class="alert alert-success">{{session::get('success')}}</div>
                           @elseif(Session::has('warning'))
                            <div class="alert alert-danger">{{session::get('warning')}}</div>
                           @endif 
                        </div>
                        {{-- sellectboat --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Select the boat</label>
                                <div>
                                    <select name="selectboat" id="" class="form-control">
                                    @foreach($boats as $boats)
                                <option value="{{$boats->boatid}}">{{$boats->name}}</option>
                            
                                    @endforeach
                                    </select>
                                    {!! $errors->first('select_boat','<p class="alert alert-danger">:message</p>')!!}
                                </div>

                            </div>

                            <div>

                            </div>
                        </div>
                        {{-- end selct boat --}}
                        {{-- select date --}}
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">select starting date</label>
                                    <div>
                                        {!! Form::date('start_date',null,['calss'=>'form-control'])!!}
                                        {!! $errors->first('start_date','<p class="alert alert-danger">:message</p>')!!}
                                    </div>
    
                                </div>
    
                                <div>
    
                                </div>
                            </div>
                            {{-- endselect date --}}

                            {{-- selectend date --}}
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="">select ending date</label>
                                        <div>
                                            {!! Form::date('end_date',null,['calss'=>'form-control'])!!}
                                            {!! $errors->first('end_date','<p class="alert alert-danger">:message</p>')!!}
                                        </div>
        
                                    </div>
        
                                    <div>
        
                                    </div>
                                </div>
                            {{-- endselect end date --}}

                            {{-- available seats --}}
                            <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">available seats</label>
                                        <div>
                                            {{-- {!! Form::text('availableseats',null,['calss'=>'form-control'])!!} --}}
                                            
                                            {{ Form::text('availableseats','',array_merge(['class' => 'form-control'])) }}
                                            {!! $errors->first('availableseats','<p class="alert alert-danger">:message</p>')!!}
                                        </div>
        
                                    </div>
        
                                    <div>
        
                                    </div>
                                </div>
                            {{-- end available seats --}}
                            {{-- startingtime --}}
                            <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">select starting time</label>
                                        <div>
                                                {{ Form::text('startingtime','',array_merge(['class' => 'form-control'])) }}
                                            {!! $errors->first('startingtime','<p class="alert alert-danger">:message</p>')!!}
                                        </div>
        
                                    </div>
        
                                    <div>
        
                                    </div>
                                </div>
                            {{-- endstartingtime --}}
                            {{-- location --}}
                            <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="">select location</label>
                                        <div>
                                               <select name="location" id="" class="form-control">
                                                   <option value="mirissa">mirissa</option>
                                                   <option value="colombo">colombo</option>
                                                   <option value="trincomalee">trincomalee</option>
                                               </select>
                                            {!! $errors->first('location','<p class="alert alert-danger">:message</p>')!!}
                                        </div>
        
                                    </div>
        
                                    <div>
        
                                    </div>
                                </div>
                            {{-- endlocation --}}

                            <div class="col-md-6 ">
                                <input type="submit" class="btn btn-primary btn-md" value="ADD TRIP TO THE CALENDER">
                            </div>
                   </div>
                </form>
                </div>
            </div>


</div>
@endsection