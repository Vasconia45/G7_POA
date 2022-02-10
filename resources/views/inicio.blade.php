<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/inicio.css') }}" rel="stylesheet" type="text/css">
</head>

<body style="background-image: URL('storage/paisaje.jpg'); background-color: #EBF6FF; background-size: cover; height: 70em; background-attachment: fixed;">


<div>
        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif
    </div>
  <nav class="navbar navbar-light navbar-expand-sm  d-flex flex-row" style="background-color:#BBE4F8;">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <div class=" col-12 d-flex flex-lg-row flex-md-row flex-column">

        <div class="col-lg-4 col-md-6 col-12 d-flex align-items-center">
          <div class="col-lg-2">
            <div class="d-flex">
              <button type="button" class="btn text-white align-items-center justify-content-center" data-bs-toggle="offcanvas" data-bs-target="#addFriend" aria-controls="addFriend" style="background-color: #81C92C;"><i class="bi bi-person-plus-fill"></i></button>

              <div class="offcanvas offcanvas-start" tabindex="-1" id="addFriend" aria-labelledby="offcanvasAddFriend">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasAddFriend">Users</h5>
                  <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                  @if ($profiles != null && isset($profiles) && is_countable( $profiles ) && count( $profiles ) > 0)
                  <table class='table'>
                    <tbody>
                      <form method="POST" id="friendsForm">
                        {{ csrf_field() }}
                        @foreach($profiles as $users)
                        <tr class="align-middle">
                          <th>{{$users->user_name}}</th>
                          <th><button type="submit" formaction="{{ route('addFriend', $users->id) }}" class="btn btn-danger"><i class="bi bi-plus-lg"></i></button></th>
                        </tr>
                        @endforeach
                      </form>
                    </tbody>
                  </table>
                  @else
                  <p>There are no users available.</p>
                  @endif
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-10 d-flex align-items-center">
            <div class="col-lg-2">
              <img src="{{ URL('storage/img/logo.png')}}" class="rounded-circle" id="fotoLogoIni">
            </div>
            <div class="col-lg-10">
              <label class="text-dark mt-3 ml-2">YOUSHAR3</label>
            </div>
          </div>
        </div>


        <div class="d-flex col-lg-8 col-md-6 col-12">

          <div class="col-lg-5">
            <div class="form-floating">
              <input type="search" class="form-control form-control-lg rounded-pill" id="friend" placeholder="Search">
              <label for="friend"><i class="bi bi-search"></i> {!! trans('messages.Search') !!}</label>
            </div>
          </div>


          <div class="d-flex col-lg-7 justify-content-end">
            <div class="d-flex col-lg-6">

              <div class="col-lg-4 d-flex align-items-center">
                <div class="dropdown">
                  <button type="button" class="btn text-white align-items-center justify-content-center" data-bs-toggle="dropdown" style="background-color: #81C92C;"><i class="bi bi-translate"></i></button>
                  <ul class="dropdown-menu bg-white">
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
                  </ul>
                </div>
              </div>

              <div class="col-lg-4 d-flex align-items-center">
                <a href="{{ route('profilePage')}}" class="btn text-white" style="background-color: #81C92C;"><i class="bi bi-person-circle"></i></a>
              </div>


              <div class="dropdown col-lg-4 d-flex align-items-center">
                <button type="button" class="btn text-white align-items-center justify-content-center" data-bs-toggle="dropdown" style="background-color: #81C92C;"><i class="bi bi-gear-wide"></i></button>
                <ul class="dropdown-menu bg-white">
                  <li><a href="/userDataCli/{{ $user->id }}" class="dropdown-item">{!! trans('messages.Manage') !!}</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a class="dropdown-item" href="{{ route('logout')}}">{!! trans('messages.Logout') !!}</a></li>
                </ul>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </nav>


  <div class="container-fluid" style="width: 100%; margin-top: 40px;">
    <h2 class="text-center text-white mb-2">{!! trans('messages.check') !!}, {{ $user->user_name }}</h2>
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6 col-md-7 col-sm-5  card" style="background-color: #BBE4F8;">
        <div class="card-header">
          <img src="{{ URL('storage/pedro.jfif')}}" class="rounded-circle" style="width: 100px;">
          <span>Pedro {!! trans('messages.upload') !!}</span>
        </div>
        <div class="card-body conatiner">
          <h5>Hello Paris!</h5> <br> <span> <a href="#" style="text-decoration: none;">Travelling</a><br></span>
          <img src="{{ URL('storage/paris.jpg')}}" style="width: 90%;" class="mb-2 mt-2">
          <p>I finally arrived to Paris! First time int the city of love. So excited to explore it.</p>
        </div>
        <div class="card-footer" style="background-color: #EBF6FF;">
          <div class="comment">
            <img src="{{ URL('storage/maria.jfif')}}" class="rounded-circle" style="width: 70px; padding: 10px;">
            <br>
            <textarea style="width: 70%; height: 70%;" class="ml-5"></textarea>
            <button type="submit" class="btn" style="background-color: #81C92C;" style="margin-left: 100px;">{!! trans('messages.comment') !!}</button>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-2 d-flex justify-content-center">
      <div class="col-lg-6 col-md-7 col-sm-5 card" style="background-color: #BBE4F8;">
        <div class="card-header">
          <img src="{{ URL('storage/pedro.jfif')}}" class="cardimg rounded-circle" style="width: 100px;">
          <span>Laura {!! trans('messages.upload') !!}</span>
        </div>
        <div class="card-body conatiner">
          <h5>My first Perfect</h5> <br> <span> <a href="#" style="text-decoration: none;">FightingGames</a><br></span>
          <div class="embed-responsive embed-responsive-16by9 mt-2">
            <video width="320" height="240" controls>
              <source src="{{ URL('storage/fighting.mp4')}}" type="video/mp4">
              Your browser does not support the video tag.
            </video>
          </div>
          <p>First perfect with grappler, feels good.</p>
        </div>
        <div class="card-footer" style="background-color: #EBF6FF;">
          <div class="comment">
            <img src="{{ URL('storage/maria.jfif')}}" class="rounded-circle" style="width: 70px; padding: 10px;">
            <br>
            <textarea style="width: 70%; height: 70%;" class="ml-5"></textarea>
            <button type="submit" class="btn" style="background-color: #81C92C;" style="margin-left: 100px;">{!! trans('messages.comment') !!}</button>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-2 d-flex justify-content-center">
      <div class="col-lg-6 col-md-7 col-sm-5 card" style="background-color: #BBE4F8;">
        <div class="card-header">
          <img src="{{ URL('storage/phill.jfif')}}" class="cardimg rounded-circle" style="width: 100px;">
          <span>Phill {!! trans('messages.upload') !!}</span>
        </div>
        <div class="card-body conatiner">
          <p>A real man ain't gonna hurt you, becuase that shit gonna hurt him.</p>
        </div>
        <div class="card-footer" style="background-color: #EBF6FF;">
          <div class="comment">
            <img src="{{ URL('storage/maria.jfif')}}" class="rounded-circle" style="width: 70px; padding: 10px;">
            <br>
            <textarea style="width: 70%; height: 70%;" class="ml-5"></textarea>
            <button type="submit" class="btn" style="background-color: #81C92C;" style="margin-left: 100px;">{!! trans('messages.comment') !!}</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>