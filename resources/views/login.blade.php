<?php
/**
 * Created by PhpStorm.
 * User: Brian Mutinda
 * Date: 09/07/2018
 * Time: 09:21 AM
 */
?>


<html>
<head>
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>

        <div class="col-lg-6" style="margin-top: 10%;">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <center>
                        <h1>Login</h1>

                        <!--Check for sucess message-->
                        @if(session()->has('message'))
                            <div class="alert alert-danger">
                                {{session()->get('message')}}
                            </div>
                        @endif

                        @if(session()->has('message_logout'))
                            <div class="alert alert-success">
                                {{session()->get('message_logout')}}
                            </div>
                        @endif

                        <form method="post" action="/login" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <input type="text" placeholder="Email" name="email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <input type="password" placeholder="Password" name="password" class="form-control" required><br>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-lg btn-primary">Login</button>
                            </div>
                        </form>
                    </center>
                </div>
            </div>

        </div>

        <div class="col-lg-3"></div>
    </div>
</div>

</body>
</html>
