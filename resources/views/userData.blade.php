<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YouShar3</title>
    <link rel="shortcut icon" href="{{ asset('img/LogoNameNoBackground.ico')}}">
    <!--HTML-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
    <!--JS-->
    <script src="{{ asset('jquery-3.6.0.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/showHide.js') }}"></script>
    <script src="{{ asset('js/userData.js') }}"></script>
</head>

<body>
    <div>
        @if(session('error_message'))
        <div class="alert alert-danger">
            {{ session('error_message') }}
        </div>
        @endif
    </div>
    <div class="row mx-auto">
        <div class="login-form col-lg-4 col-md-6 col-sm-8 col-10 mx-auto">
            <form role="form" method="POST" id="userDataModal">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-floating">
                        <input type="hidden" name="idUser" value="{{ $user->id }}" />
                        <input type="username" id="Username" name="user_name" class="form-control icon2 rounded mt-2" placeholder=" Username" value="{{$user->user_name }}">
                        <label for="Username"><i class="bi bi-person-circle"></i>{!!
                            trans('messages.username') !!}</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" id="Passwd1" name="password" class="form-control icon2 rounded  mt-2" placeholder=" Password">
                        <label for="Passwd1"><i class="bi bi-lock-fill"></i>{!!
                            trans('messages.password') !!}</label>
                        <span class="bi bi-eye-fill ojoPassword"></span>
                    </div>
                    <div class="form-floating">
                        <input type="password" id="Passwd2" class="form-control icon2 rounded  mt-2" placeholder=" Password">
                        <label for="Passwd2"><i class="bi bi-lock-fill"></i>{!!
                            trans('messages.confirm') !!}</label>
                        <span class="bi bi-eye-fill ojoPassword"></span>
                    </div>
                    <div class="form-floating">
                        <input type="text" id="Email" name="email" class="form-control icon rounded  mt-2" placeholder=" Email" value="{{$user->email }}">
                        <label for="Email"><i class="bi bi-envelope-fill"></i>{!!
                            trans('messages.mail') !!}</label>
                    </div>
                    <div class="form-floating">
                        <input type="date" id="BirthDate" name="birth_date" class="form-control icon rounded mt-2" placeholder="BirthDate" value="{{$user->birth_date }}">
                        <label for="BirthDate">{!! trans('messages.date') !!}</label>
                    </div>
                    <div class="form-floating row align-items-center">
                        <div class="col-6">
                            <a href="{{ route('adminController')}}" class="btn btn-default btn-block mt-4"><i class="bi bi-arrow-return-left"></i></a>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <button type="submit" formaction="{{ route('updateUser')}}" class="btn btn-default btn-block mt-4" id="updateBtn">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>