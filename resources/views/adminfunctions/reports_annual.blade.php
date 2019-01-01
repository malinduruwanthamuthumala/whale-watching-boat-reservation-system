@extends('layouts.userprofileadmin')
@section('content')

<div class="container-fluid" style="margin-top:200px">
    <div class="col-md-8">
    <div class="card">

            <!-- Card image -->
          
          
            <!-- Card content -->
            <div class="card-body">
                    <h4 class="card-title"><a>Annual Report</a></h4>
                    <form action="/earning_reports_annual" class="form-group">
                        <label for="" >Year</label>
                        <input type="text" class="form-control" name="year">
                        
                            <br>
                            <input type="submit" value="Generate Reports" class="btn btn-success btn-md" >
                        </form>
             
          
            </div>
          
          </div>
        </div>
</div>
@endsection