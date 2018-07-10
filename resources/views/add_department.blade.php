<?php
/**
 * Created by PhpStorm.
 * User: Brian Mutinda
 * Date: 09/07/2018
 * Time: 05:47 PM
 */
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
<!--the navigation bar-->
@include('navigation')

<div class="container">

    <div class="row">
        <div class="col-lg-4"></div>

        <div class="col-lg-4">
            <center>
                <h1>Department</h1>
                <!--Check if there are errors-->
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        <!--if errors exist print all of them-->
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!--Check for sucess message-->
                @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session()->get('message')}}
                </div>
                @endif

                <form method="post" action="/add/department">
                    {{csrf_field()}}
                    <div class="form-group">
                        <input type="text" placeholder="Department Name" name="dep_name" class="form-control" value="{{$department->department_name or ''}}" required>
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Department Head" name="dep_head" class="form-control" value="{{$department->department_head or ''}}" required>
                    </div>

                    <input type="hidden" name="dep_id" value="{{$department->id or ''}}">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </form>
            </center>
        </div>

        <div class="col-lg-4"></div>
    </div>
</div>

</body>
</html>

