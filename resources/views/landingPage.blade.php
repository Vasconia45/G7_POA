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
    <script src="jquery-3.6.0.js"></script>
    <script src="{{ asset('js/reset.js') }}"></script>
    <script src="{{ asset('js/login.js') }}"></script>
    <script src="{{ asset('js/register.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/showHide.js') }}"></script>
</head>

<body>
    <div>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
    </div>
    <div>
        @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
        @endif
    </div>
    <div>
        @if(Session::has('message'))
        <div class="alert alert-danger">
            {{ Session::get('message') }}
        </div>
        @endif

    </div>
    <div class="text-center p-2">
        <h1>{!! trans('messages.welcome') !!}</h1>
    </div>
    <div class="row mx-auto">
        <div class="col-lg-8 col-md-10 col-10 mx-auto mt-2">
            <!--Login part-->
            <div class="col-lg-6 col-md-8 col-sm-12 login-form">
                <form role="form" action="{{ route('loginUser')}}" method="POST" id="LoginModal">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <img src="{{ URL('storage/LogoNameNoBackground.png') }}" class="w-50">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-floating">
                            <input type="text" id="email" name="email" class="form-control icon rounded mt-2" value placeholder=" Email">
                            <label for="email"><i class="bi bi-envelope-fill"></i>{!! trans('messages.mail') !!}</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" id="PasswordLogin" name="password" class="form-control icon2 rounded mt-2" placeholder="Password">
                            <label for="PasswordLogin"><i class="bi bi-lock-fill"></i>{!! trans('messages.password')
                                !!}</label>
                            <span class="bi bi-eye-fill ojoPassword"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-block mt-2">{!! trans('messages.login')
                            !!}</button>
                    </div>
                    <div class="row text-center mt-3">
                        <p class="text-center small"><a href="#" data-bs-toggle="modal" data-bs-target="#ModalResetPassword">{!! trans('messages.forgot') !!}</a></p>
                    </div>
                </form>
                <!--Reset password-->
                <div class="modal fade" id="ModalResetPassword" tabindex="-1" aria-labelledby="ModalResetPasswordLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{!! trans('messages.enterMail') !!}</h5>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form role="form" id="ModalReset" action="{{ route('resetMail')}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="form-floating">
                                            <p>{!! trans('messages.reset') !!}</p>
                                        </div>
                                        <div class="form-floating">
                                            <input type="text" id="EmailReset" name="email" class="form-control icon rounded  mt-2" placeholder="Email">
                                            <label for="EmailReset"><i class="bi bi-envelope-fill"></i>{!!
                                                trans('messages.mail') !!}</label>
                                        </div>
                                        <div class="form-floating">
                                            <button type="submit" class="btn btn-default btn-block mt-4" id="sendButton">@lang('messages.send')</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center small">{!! trans('messages.notRegister') !!}<a href="#" data-bs-toggle="modal" data-bs-target="#ModalRegister"> {!! trans('messages.create') !!}</a></p>



                <!--Register modal-->
                <div class="modal fade" id="ModalRegister" tabindex="-1" aria-labelledby="ModalRegisterLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ModalRegisterLabel">{!! trans('messages.register') !!}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form role="form" id="RegisterModal" action="{{ route('registerUser')}}" method="POST">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="form-floating text-center">
                                            <img src="{{ URL('storage/LogoNameNoBackground.png') }}" class="w-50">
                                        </div>
                                        <div class="form-floating">
                                            <input type="username" id="UsernameRegister" name="user_name" class="form-control icon2 rounded mt-2" placeholder=" Username">
                                            <label for="UsernameRegister"><i class="bi bi-person-circle"></i>{!!
                                                trans('messages.username') !!}</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" id="Passwd1Register" name="password" class="form-control icon2 rounded mt-2" placeholder="Password">
                                            <label for="PasswordLogin"><i class="bi bi-lock-fill"></i>{!! trans('messages.password')
                                                !!}</label>
                                            <span class="bi bi-eye-fill ojoPassword"></span>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" id="Passwd2Register" name="password" class="form-control icon2 rounded mt-2" placeholder="Password">
                                            <label for="PasswordLogin"><i class="bi bi-lock-fill"></i>{!! trans('messages.confirm')
                                                !!}</label>
                                            <span class="bi bi-eye-fill ojoPassword"></span>
                                        </div>
                                        <div class="form-floating">
                                            <input type="text" id="EmailRegister" name="email" class="form-control icon rounded  mt-2" value placeholder=" Email">
                                            <label for="EmailRegister"><i class="bi bi-envelope-fill"></i>{!!
                                                trans('messages.mail') !!}</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="date" id="BirthDateRegister" name="birth_date" class="form-control icon rounded mt-2" value placeholder="BirthDate">
                                            <label for="BirthDateRegister">{!! trans('messages.date') !!}</label>
                                        </div>
                                        <div class="form-floating">
                                            <button type="submit" class="btn btn-default btn-block mt-4">{!!
                                                trans('messages.registrarse') !!}</button>
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
    </div>
    <footer>
        <div class="d-flex align-self-center justify-content-center mt-5">
            <span><a href="#" class="text-dark"><i class="bi bi-envelope-fill"></i></a>{!! trans('messages.contact')
                !!}</span>
            @if (config('locale.status') && count(config('locale.languages')) > 1)
            <div class="mx-4">
                @foreach (array_keys(config('locale.languages')) as $lang)
                @if ($lang != App::getLocale())
                <a href="{!! route('lang.swap', $lang) !!}" class="text-dark">
                    {!! $lang !!}
                </a>
                @endif
                @endforeach
            </div>
            @endif
        </div>
    </footer>
</body>

</html>