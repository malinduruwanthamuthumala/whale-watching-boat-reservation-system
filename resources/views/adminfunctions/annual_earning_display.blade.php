<!DOCTYPE HTML>
<html>
<head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Waves whales and dolphing watching reservation</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="css/mdb.min.css" rel="stylesheet">
        <!-- Your custom styles (optional) -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bangers|Monoton|Ultra" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bangers|Monoton|Satisfy|Ultra" rel="stylesheet">
    </head>
    <body>
    <input type="hidden" value="{{$jantotal}}" id="jan">
    <input type="hidden" id="feb" value="{{$febtotal}}">
        <input type="hidden"  id="mar" value="{{$marchtotal}}">
        <input type="hidden"  id="apr" value="{{$aprtotal}}">
        <input type="hidden" id="may" value="{{$maytotal}}">
        <input type="hidden"  id="jun" value="{{$junetotal}}">
        <input type="hidden"  id="jul" value="{{$jultotal}}">
        <input type="hidden"  id="aug" value="{{$augtotal}}">
        <input type="hidden"  id="sep" value="{{$septotal}}">
        <input type="hidden"  id="oct" value="{{$octtotal}}">
        <input type="hidden"  id="nov"value="{{$novtotal}}">
        <input type="hidden" id="dec" value="{{$dectotal}}""> 
<script>
window.onload = function () {

var jan=parseInt(document.getElementById("jan").value);  
var feb=parseInt(document.getElementById("feb").value);
var march=parseInt(document.getElementById("mar").value);
var apr=parseInt(document.getElementById("apr").value);
var may=parseInt(document.getElementById("may").value);
var jun=parseInt(document.getElementById("jun").value);
var jul=parseInt(document.getElementById("jul").value);
var aug=parseInt(document.getElementById("aug").value);
var sep=parseInt(document.getElementById("sep").value);
var oct=parseInt(document.getElementById("oct").value);
var nov=parseInt(document.getElementById("nov").value);
var dec=parseInt(document.getElementById("dec").value);


// var march=;
// var apr=;
// var may=;
// var jun=;
// var jul;
// var aug;
// var sep;
// var oct;
// var nov;
var dec=parseInt(document.getElementById("dec").value); 
var options = {
	animationEnabled: true,  
	title:{
		text: "Monthly Sales "
	},
	axisX: {
		valueFormatString: "MMM"
	},
	axisY: {
		title: "Sales (in USD)",
		prefix: "$",
		includeZero: false
	},
	data: [{
		yValueFormatString: "$#,###",
		xValueFormatString: "MMMM",
		type: "spline",
		dataPoints: [
			{ x: new Date(2017, 0), y: jan},
			{ x: new Date(2017, 1), y: feb },
			{ x: new Date(2017, 2), y: mar},
			{ x: new Date(2017, 3), y:apr },
			{ x: new Date(2017, 4), y: may },
			{ x: new Date(2017, 5), y: jun },
			{ x: new Date(2017, 6), y: jul },
			{ x: new Date(2017, 7), y: aug },
			{ x: new Date(2017, 8), y: sep },
			{ x: new Date(2017, 9), y: oct },
			{ x: new Date(2017, 10), y: nov },
			{ x: new Date(2017, 11), y: dec }
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>

        <div class="container-fluid">
                {{-- included the navigation bar --}}
                @include('include.navbar')
               {{--  --}}
                 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <div class="row">
           <div class="col-md-4" >
            <div class="wrapper">
                <aside class="main_sidebar">
                        <ul style="margin-top:100px">
                                <li><i class="fa fa-arrows"></i><a href="/confirmboat">Confirm Boat Registration</a></li>
                                <li><i class="fa fa-battery-2"></i><a href="/set_price">Set prices</a></li>
                               
                                
                                <li><i class="fa fa-circle"></i><a href="/payinfo">payement info</a></li>
                                <li><i class="fa fa-crosshairs"></i><a href="/admin_payement_info">Transaction history</a></li>
                                <li><i class="fa fa-deaf"></i><a href="/ongoing_reserve_admin">View Ongoing Reservations</a></li>
                                <li><i class="fa fa-desktop"></i><a href="/live_search">view boats details</a></li>
                                <li><i class="fa fa-desktop"></i><a href="/reports">Generate Reports</a></li>
                                <li><i class="fa fa-desktop"></i><a href="/reports_annual">Generate cashflow Reports </a></li>
                                <li><i class="fa fa-desktop"></i><a href="/reports_revenue_annual">Generate revenue Reports </a></li>
                               
                            </ul>
                </aside>
               
            </div>
            
           </div>
        
           <div class="col-md-8" style="margin-top:200px;margin-left:-100px">
             <div>
               
                
                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>    
                
             </div>
           </div>
        
               {{--  --}}
                    {{-- included the error messages --}}
                
                
                {{-- content of the web page --}}
              
                <div style="margin-bottom:0px">
                {{-- footer of the page --}}
                {{-- <div class="container-fluid"style="position:absolute;bottom:0"> --}}
                      
                {{-- </div>
                 --}}
                </div>
               
            </div>
            
        
            <!-- SCRIPTS -->
            <!-- JQuery -->
            <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="js/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript --> 

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>

<style>
        body {
        margin:0px;
        padding:0px;
        box-sizing:border-box;
       
    }
    .main_sidebar {
        min-height:100vh;
        position:fixed;
        top:0;
        left:0;
        width:300px;
        transition: all 300ms cubic-bezier(0.65, 0.05, 0.36, 1);
        will-change: left, width;
        box-shadow: inset -1px 0 10px rgba(0, 0, 0, 0.4);
        background:#34495E;
    }
    .main_sidebar:after {
        content: '';
        background-color: #253238;
        position: absolute;
        top: 0;
        z-index: -1;
        height: 100%;
        width: 58px;
    }
    .main_sidebar ul {
        list-style:none;
        padding-left:58px;
    }
    .main_sidebar ul li {
        padding:10px;
    }
    .main_sidebar ul li a {
        color:#fff;
        display:block;
    }
    .main_sidebar ul li i {
        float:left;
        color:grey;
        margin-left:-58px;
        font-size:24px;
        padding-left:7px;
    }
    .main_sidebar ul li:hover {
        background:#167696;
    }
    .main_sidebar ul li a:hover {
        color:#fff;
        text-decoration:none;
    }
    .main_sidebar ul li:hover i {
        color:#fff;
    }
    .main_sidebar ul li.active {
        background:#0f4698;
    }
    .main_sidebar ul li.active i {
        color:#fff;
    }
    .main_sidebar ul li.active:hover {
        background:#167696;
    }
    .main_sidebar ul li.active:hover i {
        color:#fff;
    }
    
    .main {
        float:right;
        color:#fff;
        display:block;
        width:100%;
        background:red;
        min-height:100vh;
    }
    
    
    
    
    
    </style>
</html>