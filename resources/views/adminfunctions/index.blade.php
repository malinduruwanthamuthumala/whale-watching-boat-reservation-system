@extends('layouts.userprofileadmin')
@section('content')
<div style="margin-top:100px;margin-left:-50px">
        <header>
                <a class="nav-link" href="/confirmboat">
                <div class="alert alert-primary" role="alert" style="width:600px" id="abc" ">
                 <div>
                        
                                <i class="fa fa-envelope-o" style="font-size:30px">
                                <span class="badge badge-danger">{{$wordCount}}</span>
                                </i>
                                <input type="hidden" value="{{$wordCount}}" id="count">
                                <p style="">You have got {{$wordCount}} requests to confirm </P>
                                
                </div>      
                </div>
                </a> 
                <div class="row jumbotron " style="width:800px">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <img src="img/waves.png" data-holder-rendered="true" />
                            </a>
                       
                            <div class="col company-details">
                                    <br><br>
                                    <h2 class="name">
                                        <a target="_blank" href="/">
                                        WAVES
                                        </a>
                                    </h2>
                                    <div>Ranawiru mawatha, Mirissa 81740, Sri Lanka</div>
                                    <div>(123) 456-789</div>
                                    <div>waves@gmail.com</div>
                                    <div>Published by ROYAL TOURS MIRISSA</div>
                                    <div>Government Reg No:INS888-10005-00024</div>

                                </div>
                    </div>
                   
                </div>
            </header>
</div>

@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    
	$('#abc').hide();
    var count=$('#count').val();
    if(count>0){
        $('#abc').show();
    }
});
</script>