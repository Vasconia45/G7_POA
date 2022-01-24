<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/estiloLanding.css" rel="stylesheet" type="text/css">
</head>

<body style="background-image: URL('storage/paisaje.jpg'); background-color: #EBF6FF; background-size: cover; height: 70em; background-attachment: fixed;">
  <nav class="navbar navbar-light navbar-expand-sm  d-flex flex-row" style="background-color:#BBE4F8;">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <div class="row col-12 d-flex flex-lg-row flex-md-row flex-column">
        <div class="col-lg-7 col-md-6 col-12 d-flex">
          <div class="row">
            <div class="col-lg-4 d-flex">
              <img src="{{ URL('storage/logo.png')}}" class="rounded-circle" style="width: 60px;">
              <label class="text-dark mt-3 ml-2">YOUSHAR3</label>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center">
              <button class="btn  text-white ml-2" style="background-color: #81C92C;"><i class="bi bi-person-circle"></i> {!! trans('messages.Profile') !!}</button>
            </div>
            <div class="col-lg-4 d-flex align-items-center justify-content-center">
              <div class="dropdown mt-1">
                <button type="button" class="btn dropdown-toggle text-white align-items-center justify-content-center ml-lg-2 mb-1" data-bs-toggle="dropdown" style="background-color: #81C92C;">{!! trans('messages.Lenguage') !!}</button>
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

          </div>
        </div>
        <div class="d-flex col-lg-5 col-md-6 col-12">
          <div class="row">
            <div class="col-6 d-flex ">
              <div class="form-floating">
                <input type="search" class="form-control rounded-pill" id="friend" placeholder="Search for Friends" style="width: 200px;">
                <label for="friend"><i class="bi bi-search"></i> {!! trans('messages.Search') !!}</label>
              </div>
              <div class="dropdown ml-4 mt-2">
                <button type="button" class="btn dropdown-toggle text-white align-items-center justify-content-center ml-lg-2" data-bs-toggle="dropdown" style="background-color: #81C92C;"><i class="bi bi-gear-wide"></i> {!! trans('messages.Settings') !!}</button>
                <ul class="dropdown-menu bg-white">
                  <li><a class="dropdown-item">{!! trans('messages.Manage') !!}</a></li>
                  <div class="dropdown-divider"></div>
                  <li><a class="dropdown-item" href="{{ route('landingPage')}}">{!! trans('messages.Logout') !!}</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>


  <div class="container-fluid" style="width: 100%; margin-top: 40px;">
    <h2 class="text-center text-white mb-2">{!! trans('messages.check') !!}</h2>
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6 col-md-7 col-sm-5  card" style="background-color: #BBE4F8;">
        <div class="card-header">
          <img src="{{ URL('storage/pedro.jfif')}}" class="rounded-circle" style="width: 100px;">
          <span>Pedro {!! trans('messages.upload') !!}</span>
        </div>
        <div class="card-body conatiner">
          <h5>Hello Paris!</h5> <br> <span> <a href="#" style="text-decoration: none;">Travelling</a></span>
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
          <img src="{{ URL('storage/laura.jfif')}}" class="cardimg rounded-circle" style="width: 100px;">
          <span>Laura {!! trans('messages.upload') !!}</span>
        </div>
        <div class="card-body conatiner">
          <h5>My first Perfect</h5> <br> <span> <a href="#" style="text-decoration: none;">FightingGames</a></span>
          <div class="embed-responsive embed-responsive-16by9 mt-2">
            <iframe style="width: 90%; height: 90%;" src="{{ URL('storage/fighting.mp4')}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

  <footer class="pie mt-2" style="background-color: #81C92C;">
    <div class="row text-center">
      <a href="https://twitter.com/?lang=ES"><i class="bi bi-twitter">Twitter</i></a>
    </div>
    <div class="row text-center">
      <a href="https://www.facebook.com/"><i class="bi bi-facebook">Facebook</i></a>
    </div>
    <div class="row text-center">
      <a href="https://www.reddit.com/"><i class="bi bi-reddit">Reddit</i></a>
    </div>
    <div class="row text-center">
      <span><i class="bi bi-envelope-fill"></i>Contact mail: youshar3@support.com</span>
    </div>
  </footer>


</body>

</html>