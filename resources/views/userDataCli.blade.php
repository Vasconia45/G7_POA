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
    <link rel="stylesheet" href="{{ asset('/css/estiloLandingPage.css') }}">
    <!--JS-->
    <script src="{{ asset('jquery-3.6.0.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body id="userDataAdmin2">
    <!-- alert if there is an error when updating the user data by the own user -->
    <div>
        @if(session('error_message'))
        <div class="alert alert-danger">
            {{ session('error_message') }}
        </div>
        @endif
    </div>
    <div>
        <div class="login-form col-lg-4 col-md-4 col-12 mx-auto">
            <!-- The form for the user data edit by the own user -->
            <form role="form" method="POST" id="userDataForm2">
                {{ csrf_field() }}
                <div class="form-group row mx-auto d-flex flex-column">
                    <div class="form-floating text-center ">
                        <img src="{{ URL('storage/LogoNameNoBackground.png') }}" class="w-75 justify-center">
                    </div>
                    <div class="form-floating">
                        <input type="hidden" name="idUser" value="{{ $user->id }}" />
                        <input type="username" id="UsernameRegister" name="user_name" class="form-control icon2 rounded mt-2" placeholder=" Username" value="{{$user->user_name }}">
                        <label for="UsernameRegister"><i class="bi bi-person-circle"></i>{!!
                            trans('messages.username') !!}</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" id="Passwd1Register" name="password" class="form-control icon2 rounded  mt-2" placeholder=" Password">
                        <label for="Passwd1Register"><i class="bi bi-lock-fill"></i>{!!
                            trans('messages.password') !!}</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" id="Passwd2Register" class="form-control icon2 rounded  mt-2" placeholder=" Password">
                        <label for="Passwd2Register"><i class="bi bi-lock-fill"></i>{!!
                            trans('messages.confirm') !!}</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" id="EmailRegister" name="email" class="form-control icon rounded  mt-2" placeholder=" Email" value="{{$user->email }}">
                        <label for="EmailRegister"><i class="bi bi-envelope-fill"></i>{!!
                            trans('messages.mail') !!}</label>
                    </div>
                    <div class="form-floating">
                        <input type="date" id="BirthDateRegister" name="birth_date" class="form-control icon rounded mt-2" placeholder="BirthDate" value="{{$user->birth_date }}">
                        <label for="BirthDateRegister">{!! trans('messages.date') !!}</label>
                    </div>
                    <!-- Button to update the own user data, it will call the updateUserCli function of the UserSessionController controller -->
                    <div class="form-floating row align-items-center">
                        <div class="col-6">
                            <a href="{{ route('backInicio')}}" class="btn btn-default btn-block mt-4"><i class="bi bi-arrow-return-left"></i></a>
                        </div>
                        <div class="col-3 d-flex justify-content-end">
                            <button type="submit" formaction="{{ route('updateUserCli')}}" class="btn btn-default btn-block mt-4" id="updateBtn">Update</button>
                        </div>
                        <div class="col-3 d-flex justify-content-end">
                            <button type="submit"  formaction="{{ route('deleteUserCli')}}" class="btn btn-default btn-block mt-4" id="deleteBtn">Delete</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>