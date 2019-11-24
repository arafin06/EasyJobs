<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('/')}}front/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}front/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}front/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}front/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}front/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}front/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}front/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}front/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
<h4 class="text-center"> @if($message=Session::get('message')) {{$message}} @endif</h4>

<div class="limiter">
    <div class="container-login100">

        <div class="wrap-login100">


            <form action="{{route('login-company')}}" method="post">
                @csrf
					<span class="login100-form-title">
						Company Login
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="form-group">
                        <div >
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Login"/>
                        </div>
                    </div>
                </div>



                <div class="text-center p-t-100">
                    <a class="txt2" href="#">
                        <button style="margin-top: 8px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#signUpcompany">
                            Sign up
                        </button>
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>






            <form action="{{route('login-user')}}" method="post">
                @csrf
                <span class="login100-form-title">
						User Login
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <div class="form-group">
                        <div >
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Login"/>
                        </div>
                    </div>
                </div>



                <div class="text-center p-t-100">
                    <a class="txt2" href="#">
                        <button style="margin-top: 8px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#signUp">
                            Sign up
                        </button>
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>




<div class="modal" id="signUpcompany">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="modal-title">Sign Up </h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="margin: 15px">
                <form class="form-horizontal" action="{{route('new-company')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label style="color: #9d1e15">First Name</label>
                        <div >
                            <input type="text" name="fname" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="color: #9d1e15">Last Name</label>
                        <div >
                            <input type="text" name="lname" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="color: #9d1e15">Business Name</label>
                        <div >
                            <input type="text" name="bname" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="color: #9d1e15">Email Address</label>
                        <div >
                            <input type="email" name="email" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="color: #9d1e15">Password</label>
                        <div >
                            <input type="password" name="password" class="form-control">

                        </div>
                    </div>




                    <div class="form-group">
                        <div >
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Registration"/>
                        </div>
                    </div>
                </form>
            </div>



        </div>
    </div>
</div>


<div class="modal" id="signUp">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h2 class="modal-title">Sign Up</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body" style="margin: 15px">
                <form class="form-horizontal" action="{{route('new-user')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label style="color: #9d1e15">First Name</label>
                        <div >
                            <input type="text" name="fname" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="color: #9d1e15">Last Name</label>
                        <div >
                            <input type="text" name="lname" class="form-control"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label style="color: #9d1e15">Email Address</label>
                        <div >
                            <input type="email" name="email" class="form-control"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label style="color: #9d1e15">Password</label>
                        <div >
                            <input type="password" name="password" class="form-control">

                        </div>
                    </div>




                    <div class="form-group">
                        <div >
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Registration"/>
                        </div>
                    </div>
                </form>
            </div>



        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="{{asset('/')}}front/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}front/vendor/bootstrap/js/popper.js"></script>
<script src="{{asset('/')}}front/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}front/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{asset('/')}}front/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="{{asset('/')}}front/js/main.js"></script>

</body>
</html>