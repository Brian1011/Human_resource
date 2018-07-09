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
            <table class="table table-hover">
                <tr class="warning">
                    <th>Dep Id</th>
                    <th>Dep name</th>
                    <th>Dep head</th>
                    <th>Total Employees</th>
                    <th>Edit</th>
                    <th>View Employees</th>
                </tr>

                <!--Loop through the data-->
                @foreach($user_installment as $user_installment)
                    <tr class="info">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endforeach

            </table>
        </div>

        <div class="col-lg-3"></div>
    </div>
</div>

</body>
</html>


