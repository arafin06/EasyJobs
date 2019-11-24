<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EasyJobs/User</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}views/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}views/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}views/css/core.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}views/css/components.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}views/css/colors.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{asset('/')}}views/js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="{{asset('/')}}views/js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('/')}}views/js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('/')}}views/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('/')}}views/js/core/app.js"></script>
    <!-- /theme JS files -->

</head>

<body>

<!-- Main navbar -->
@include('user.include.header')
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        @include('user.include.sidebar')
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper" >




            @yield('body')









        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->



</body>
</html>
