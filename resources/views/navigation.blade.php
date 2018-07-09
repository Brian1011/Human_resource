<?php
/**
 * Created by PhpStorm.
 * User: Brian Mutinda
 * Date: 09/07/2018
 * Time: 09:24 AM
 */
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">

    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="/">Homepage</a>
        </div>

        <ul class="nav navbar-nav">
            <!--You are logged in-->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Employees
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{'/Item'}}">All Employees</a> </li>
                            <li><a href="{{url('/ItemForm')}}">Add Employee</a> </li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Departments
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{'/Managers'}}">All Departments</a> </li>
                            <li><a href="{{'/ManagerForm'}}">Add Department</a> </li>
                        </ul>
                    </li>
        </ul>

        <!--Appears at the rigt handside of the navigation bar-->
        <ul class="nav navbar-nav navbar-right">
            <!--if you are logged in irregardless of category you will see profile and logout-->
            <li><a href="/profile">Profile</a></li>
            <li><a href="/logout">Logout</a></li>
        </ul>

    </div>
</nav>

</body>
</html>
