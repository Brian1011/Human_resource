<?php
/**
 * Created by PhpStorm.
 * User: Brian Mutinda
 * Date: 09/07/2018
 * Time: 09:33 AM
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
        <div class="col-lg-3"></div>

        <div class="col-lg-6">
            <h1><center>All Departments</center></h1>
            <!--Check for sucess message-->
            @if(session()->has('message'))
                <div class="alert alert-success">
                    {{session()->get('message')}}
                </div>
            @endif

            <table class="table table-hover">
                <tr class="warning">
                    <th>Dep Id</th>
                    <th>Dep name</th>
                    <th>Dep head</th>
                    <th>Edit</th>
                    <th>View Employees</th>
                </tr>

                <!--Loop through the data-->
                @foreach($departments as $dep)
                    <tr class="info">
                        <td>{{$dep->id}}</td>
                        <td>{{$dep->department_name}}</td>
                        <td>{{$dep->department_head}}</td>
                        <td><a href="/department/edit/{{$dep->id}}">Edit</a> </td>
                        <td><a href="/department/employee/{{$dep->id}}">View Employees</a> </td>
                    </tr>
                @endforeach

            </table>
        </div>

        <div class="col-lg-3"></div>
    </div>
</div>

</body>
</html>


