@extends('layouts.userprofileadmin')
@section('content')
<title>Download Your Monthly Report</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div style="margin-top:100px">

    <h3>Boattrips Information</h3>
<a href="getPDFmirissaa" class="btn btn-success" >GET PDF</a>
<h2>Royal tours</h2>
    <table id="boattrips">

        <thead>
            <tr>
                <th>Boat ID</th>
                <th>Location</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
        </thead>

        <tbody>
        @foreach($boat as $boats)

            <tr>
                <td>{{$boats->boatid}}</td>
                <td>{{$boats->location}}</td>
                <td>{{$boats->start_date}}</td>
                <td>{{$boats->end_date}}</td>
            </tr>

        @endforeach
        </tbody>

    </table> 





<style type="text/css">

    #boattrips {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#cboattrips td, #boattrips th {
    border: 1px solid #ddd;
    padding: 8px;
}

#boattrips tr:nth-child(even){background-color: #BAE2F9;}

#boattrips tr:hover {background-color: #DCE6EC;}

#boattrips th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #0C82C5;
    color: white;

    /* #boattrips{ */
        /* border-collapse: collapse; */
        /* width:100%; */
        /* margin:0 auto; */
        /* border:2px solid; */
        /* background-color: #BCE2F8; */

    }

    </style>

</div>

@endsection
   
