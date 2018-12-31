@extends('layouts.userprofileboat')

@section('content')


<div class="container-fluid" style="margin-top:200px">
    <div class="col-md-8">
    <div class="card">

            <!-- Card image -->
          
          
            <!-- Card content -->
            <div class="card-body">
                    <h4 class="card-title"><a>Annual Report</a></h4>
                    <form action="/monthearnBoat" class="form-group">
                        <label for="" >Year</label>
                        <input type="text" class="form-control" name="year">
                        {{-- <select name="month" id="" class="form-control">
                                <option value="01">january</option>
                                <option value="02">february</option>
                                <option value="03">march</option>
                                <option value="04">April</option>
                                <option value="05">may</option>
                                <option value="06">june</option>
                                <option value="07">july</option>
                                <option value="08">august</option>
                                <option value="09">septhember</option>
                                <option value="10">october</option>
                                <option value="11">november</option>
                                <option value="12">december</option>
                               
                                                                           
                           </select> --}}
                            <br>
                            <input type="submit" value="Generate Reports" class="btn btn-success btn-md" >
                        </form>
             
          
            </div>
          
          </div>
        </div>
</div>

@endsection