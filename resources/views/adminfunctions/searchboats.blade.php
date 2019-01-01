@extends('layouts.userprofileadmin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
@section('content')

<div class="card card-cascade wider reverse col-md-12" style="margin-top:100px;margin-left:-40px">
        <div class="container box">
                
                <div class="panel panel-default">
              <br>
                 <div class="panel-body">
                  <div class="form-group">
                   <input type="text" name="search" id="search" class="form-control" placeholder="Search  Data" />
                  </div>
                  <div class="table-responsive">
                   
                   <table class="table">
                    <thead class="black white-text" >
                     <tr>
                      <th>boatid</th>
                      <th>governmentregno</th>
                      <th>ownerid</th>
                      <th>name</th>
                      <th>location</th>
                      <th>no of seats</th>
                      <th>Telephone</th>
                      <th>Insured Passengers</th>
                      <th>Insuarence company</th>
                      <th>Reg No</th>
                      <th>Bank </th>
                      <th>Bank acc no</th>
                     </tr>
                    </thead>
                    <tbody>
             
                    </tbody>
                   </table>
                  </div>
                 </div>    
                </div>
               </div>
              </body>
             </html>
             
             <script>
             $(document).ready(function(){
            
              fetch_customer_data();
             
              function fetch_customer_data(query = '')
              {
               $.ajax({
                  
                url:"/live_search/action",
                method:'GET',
                data:{query:query},
                dataType:'json',
                success:function(data)
                {
                 $('tbody').html(data.table_data);
                 $('#total_records').text(data.total_data);
                }
               })
              }
             
              $(document).on('keyup', '#search', function(){
               
               var query = $(this).val();

               fetch_customer_data(query);
              });
             });
             </script>
             
</div>

@endsection
