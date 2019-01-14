@extends('layouts.basic')
@section('content')
    <title>status</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
    
</head>

<body>
    
    <div class="container">
        <div class="row justify-content-center" style="margin-top">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Your Ideas</div>
    
                            <div class="card-body">
                                
                                <form action="/sendmail" method="">
                                   @csrf

                                    <div class="form-group">

                                    <label for="name">Name</label>
                                        <input class="form-control" placeholder="name" type="text" name="name">

                                    <label for="email">Email</label>
                                        <input class="form-control" type="email" name="email">

                                    <label for="comment">Comment</label>
                                        <textarea class="form-control" name="comment"></textarea>

                                    </div>

                                    <input class="btn btn-primary" type="submit" value="Done">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<style>
    .justify-content-center{
        margin-top:100px;
        width:100%;
    }
</style>


@endsection