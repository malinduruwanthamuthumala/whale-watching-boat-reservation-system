@extends('layouts.userprofileadmin')
@section('content')

<div class="row" style="margin-top:150px; margin-left:-50px">

        <div class="col-sm-5 mb-3 mb-md-0">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Monthly trip reports</h5>
              <p class="card-text">generate monthly reports regarding trip details in pdf form</p>
              
            <form action="{{action('PDFController@month')}}" class="form-group">
                  <select name="month" id="" class="form-control">
                       <option value="1">january</option>
                       <option value="2">february</option>
                       <option value="3">march</option>
                       <option value="4">April</option>
                       <option value="5">may</option>
                       <option value="6">june</option>
                       <option value="7">july</option>
                       <option value="8">august</option>
                       <option value="9">septhember</option>
                       <option value="10">october</option>
                       <option value="11">november</option>
                       <option value="12">december</option>
                      
                                                                  
                  </select>
                  <button class="btn btn-primary">Get Report</button>
              </form>
            
            </div>
          </div>
        </div>
      
        <div class="col-sm-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Annual trip reports</h5>
              <p class="card-text">generate annual reports regarding trip details in pdf form</p>
              <a href="/getPDF" class="btn btn-primary">Generate report</a>
              
            </div>
          </div>
        </div>
      </div>
@endsection
