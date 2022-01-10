<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page YouShar3 (Pablo)</title>
    <!--HTML-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="css/estiloLandingPage.css" rel="stylesheet">
    <!--JS-->
    <script src="jquery-3.6.0.js"></script>
    <script src="js/reset.js"></script>
</head>

<body>
    <div class="row text-center p-2">
        <h1>Welcome to YouShar3</h1>
    </div>
    <div class="row mx-auto">
        <div class="col-lg-8 col-md-8 col-sm-12 mx-auto mt-5">
            <!--Login part-->
            <div class="login-form">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <img src="/img/LogoNameNoBackground.png" class="w-50">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-floating">
                            <input type="email" id="email" class="form-control icon rounded mt-2" value placeholder=" Email">
                            <label for="email"><i class="bi bi-envelope-fill"></i>Email</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" id="passwd" class="form-control icon2 rounded mt-2" placeholder="Password">
                            <label for="passwd"><i class="bi bi-lock-fill"></i>Password</label> 
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-block mt-2">Login</button>
                    </div>
                </form>
                <!--Reset password-->
                <p class="text-center small"><a href="#" data-bs-toggle="modal" data-bs-target="#ModalResetPassword">Forgot Password?</a></p>
                    <div class="modal fade" id="ModalResetPassword" tabindex="-1" aria-labelledby="ModalResetPasswordLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Enter your email</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form role="form" id="ModalReset" action="{{ route('resetMail')}}" method="POST">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <div class="form-floating">
                                                <p>
                                                    Enter your email, and we will send you a link to recover the access to your account.</p>
                                            </div>
                                            <div class="form-floating">
                                                <input type="email" id="EmailReset" name="email" class="form-control icon rounded  mt-2" placeholder="Email">
                                                <label for="EmailReset"><i class="bi bi-envelope-fill"></i>Email</label>
                                            </div>
                                            <div class="form-floating">
                                                <button type="submit" class="btn btn-default btn-block mt-4" id="sendButton">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                <p class="text-center small">Not Registered? <a href="#" data-bs-toggle="modal" data-bs-target="#ModalRegister">Create an Account</a></p>



                <!--Register modal-->
                <div class="modal fade" id="ModalRegister" tabindex="-1" aria-labelledby="ModalRegisterLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalRegisterLabel">Register</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form  role="form" id="newModalForm">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="form-floating text-center">
                                            <img src="/img/LogoNameNoBackground.png" class="w-50">
                                        </div>
                                        <div class="form-floating">
                                            <input type="username" id="UsernameRegister" class="form-control icon2 rounded mt-2" placeholder=" Username">
                                            <label for="UsernameRegister"><i class="bi bi-person-circle"></i>Username</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" id="Passwd1Register" class="form-control icon2 rounded  mt-2" placeholder=" Password">
                                            <label for="Passwd1Register"><i class="bi bi-lock-fill"></i>Password</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" id="Passwd2Register" class="form-control icon2 rounded  mt-2" placeholder=" Password">
                                            <label for="Passwd2Register"><i class="bi bi-lock-fill"></i>Confirm Password</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="email" id="EmailRegister" class="form-control icon rounded  mt-2" value placeholder=" Email">
                                            <label for="EmailRegister"><i class="bi bi-envelope-fill"></i>Email</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="date" id="BirthDateRegister" class="form-control icon rounded mt-2" value placeholder="BirthDate">
                                            <label for="BirthDateRegister">Birth Date</label>
                                        </div>
                                        <div class="form-floating">
                                            <button type="submit" class="btn btn-default btn-block mt-4">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>