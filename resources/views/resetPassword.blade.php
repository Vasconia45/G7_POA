<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouShar3</title>
    <link rel="shortcut icon" href="{{ URL('storage/LogoNameNoBackground.ico')}}">
    <!--HTML-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/estiloLandingPage.css') }}">
    <!--JS-->
    <script src="{{asset('jquery-3.6.0.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/showHide.js') }}"></script>
</head>

<body>
    <div class="col-lg-6 col-md-8 col-sm-12 login-form">
        <form role="form" action="{{ route('resetUpdatePassword')}}" method="POST" id="LoginModal" class="mt-5">
            @csrf
            <div class="form-group">
                <div class="form-floating">
                    <input type="text" id="email" name="email" class="form-control icon rounded mt-2" value placeholder=" Email">
                    <label for="email"><i class="bi bi-envelope-fill"></i>{!! trans('messages.mail') !!}</label>
                </div>
                <div class="form-floating">
                    <input type="password" id="PasswordLogin" name="password" class="form-control icon2 rounded mt-2" placeholder="Password">
                    <label for="PasswordLogin"><i class="bi bi-lock-fill"></i>New password</label>
                    <span class="bi bi-eye-fill ojoPassword"></span>
                </div>
                <div class="form-floating">
                    <input type="password" id="Passwd2Register" name="password" class="form-control icon2 rounded mt-2" placeholder="Password">
                    <label for="PasswordLogin"><i class="bi bi-lock-fill"></i>{!! trans('messages.confirm')
                        !!}</label>
                    <span class="bi bi-eye-fill ojoPassword"></span>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-default btn-block mt-2">Save</button>
            </div>
        </form>
    </div>

</body>

</html>