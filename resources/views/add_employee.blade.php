<?php
/**
 * Created by PhpStorm.
 * User: Brian Mutinda
 * Date: 09/07/2018
 * Time: 09:54 AM
 */
?>

<html>
<head>
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
<!--the navigation bar-->
@include('navigation bar/nav')

<div class="container">

    <div class="row">
        <div class="col-lg-4"></div>

        <div class="col-lg-4">
            <center>
                <h1>Employee Page</h1>
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

                <form method="post" action="" enctype="multipart/form-data">
                    {{csrf_field()}}

                    Employee Image: <br>
                    <div class="form-group">
                        <input type="file" name="item_image" value="">
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Employee Name" name="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="text" placeholder="Employee Phone" name="phone" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <select type="text" placeholder="Marital Status" name="marital_status" class="form-control" required>
                            <option value="Married">Married</option>
                            <option value="Single">Single</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <select type="text" placeholder="Department Name" name="department" class="form-control" required>
                            <option value="Married">Department 1</option>
                            <option value="Single">Dep 2</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <textarea name="extras" placeholder="Extra info">

                        </textarea>
                        <input type="text" placeholder="Extra info" name="phone" class="form-control" required>
                    </div>

                    <input type="hidden" name="category" value="1">
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