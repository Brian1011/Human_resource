<?php
/**
 * Created by PhpStorm.
 * User: Brian Mutinda
 * Date: 09/07/2018
 * Time: 10:06 AM
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

        <div class="col-lg-12">
            <h1><center>List of Employees</center></h1>
            <table class="table table-hover">
                <tr class="warning">
                    <th>Employee Image</th>
                    <th>Employee Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Marital Status</th>
                    <th>Department</th>
                    <th>Edit</th>
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

    </div>
</div>

</body>
</html>
