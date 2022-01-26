<!DOCTYPE html>
<html>

<head>
    <title>ProfilePage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="{{ asset('/css/css.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container-fluid backgroundColor">


        <!--Navbar-->
        <div class="row">
            <nav class="navbar navbar-expand-md navbar-light backgroundColor fixed">
                <div class="col-9">
                    <div class="row align-items-center">
                        <div class="col-1">
                            <button type="button" class="btn buttonColorNav" data-bs-toggle="modal"
                                data-bs-target="#addPeopleModal"><i class="bi bi-person-plus-fill"></i></button>

                            <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true" id="addPeopleModal">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5>Users from YouShar3</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-3">
                                            <div class="row align-items-center addPeopleBgColor rounded text-white p-1">
                                                <div class="col-2">
                                                    <img src="{{ URL('storage/img/fotoperfil.jfif') }}" class="rounded-circle addPeopleFoto">
                                                </div>
                                                <div class="col-8">
                                                    <span>@Pepe</span>
                                                    <span>|</span>
                                                    <label>Se registra en tu zona</label>
                                                </div>
                                                <div class="col-1">
                                                    <button type="button" class="btn buttonColorNav"><i
                                                            class="bi bi-plus-lg"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <img src="{{ URL('storage/img/logo.png')}}" class="imgNav">
                            <span>YouShar3</span>
                        </div>
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-3 collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="col-10 navbar-nav justify-content-around">
                        <li class="nav-item dropdown">
                            <button type="button" class="btn buttonColorNav" data-bs-toggle="modal" data-bs-target="#test"><i
                                    class="bi bi-chat-dots-fill"></i></button>

                                <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                aria-labelledby="staticBackdropLabel" aria-hidden="true" id="test">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5>Users from YouShar3</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-3">
                                            <marquee scrollamount="10" direction="right" width="100%">
                                                <img src="{{ URL('storage/img/logo.gif') }}" class="w-50">
                                            </marquee>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <button type="button" class="btn buttonColorNav" data-bs-toggle="dropdown"><i
                                    class="bi bi-bell-fill"></i></button>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#">HTML</a>
                                <a class="dropdown-item" href="#">HTML</a>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <button class="btn buttonColorNav" data-bs-toggle="dropdown"><i
                                    class="bi bi-gear-fill"></i>Settings</button>
                            <ul class="dropdown-menu">
                                <a class="dropdown-item" href="#">HTML</a>
                                <a class="dropdown-item" href="#">HTML</a>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>


        <!--Bloque1-->
        <div class="row mt-3">


            <!--Bloque del Perfil del Usuario-->
            <div class="col-6">
                <div class="col-10 card sizeCard">
                    <img class="card-img-top" src="{{ URL('storage/img/p.jpg') }}" alt="Card image cap">
                    <div class="card-body">
                        <div class="col-4 ms-4 text-end">
                            Pepe@home
                        </div>
                        <img src="{{ URl('storage/img/fotoperfil.jfif') }}" class="rounded-circle" id="fotoPerfil">
                    </div>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <div class="col-8 d-flex justify-content-between">
                            <a href="#" class="btn buttonColorCard">Friends</a>
                            <a href="#" class="btn buttonColorCard">Photos</a>
                            <a href="#" class="btn buttonColorCard">Videos</a>
                        </div>
                    </div>
                </div>
            </div>


            <!--Bloque Galeria de Fotos-->
            <div class="col-6">

                <div class="row p-3">
                    <div class="col-6  mb-4">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalImage1">
                            <img class="w-100 mb-4 rounded" src="{{ URL('storage/img/galeriaFotos/1.jpg') }}">
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalImage2">
                            <iframe class="w-100" src="https://www.youtube.com/embed/0yZcDeVsj_Y"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalImage3">
                            <img class="w-100 mb-4 rounded" src="{{ URL('storage/img/galeriaFotos/3.jpg') }}">
                        </a>
                    </div>

                    <div class="col-6 mb-4">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalImage4">
                            <img class="w-100 mb-4 rounded" src="{{ URL('storage/img/galeriaFotos/4.jpg') }}">
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalImage5">
                            <img class="w-100 mb-4 rounded" src="{{ URL('storage/img/galeriaFotos/5.jpg') }}">
                        </a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#modalImage6">
                            <img class="w-100 mb-4 rounded" src="{{ URL('storage/img/galeriaFotos/6.jpg') }}">
                        </a>
                    </div>
                </div>

                <!--Modal Gallery-->

                <!--Image1-->
                <div tabindex="-1" aria-labelledby="modalImage1" aria-hidden="true" class="modal fade" id="modalImage1">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <img src="{{ URL('storage/img/galeriaFotos/1.jpg') }}">
                        </div>
                    </div>
                </div>


                <div tabindex="-1" aria-labelledby="modalImage1" aria-hidden="true" class="modal fade" id="modalImage3">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <img src="{{ URL('storage/img/galeriaFotos/3.jpg') }}">
                        </div>
                    </div>
                </div>

                <div tabindex="-1" aria-labelledby="modalImage1" aria-hidden="true" class="modal fade" id="modalImage4">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <img src="{{ URL('storage/img/galeriaFotos/4.jpg') }}">
                        </div>
                    </div>
                </div>

                <div tabindex="-1" aria-labelledby="modalImage1" aria-hidden="true" class="modal fade" id="modalImage5">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <img src="{{ URL('storage/img/galeriaFotos/5.jpg') }}">
                        </div>
                    </div>
                </div>

                <div tabindex="-1" aria-labelledby="modalImage1" aria-hidden="true" class="modal fade" id="modalImage6">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <img src="{{ URL('storage/img/galeriaFotos/6.jpg') }}">
                        </div>
                    </div>
                </div>

            </div>


        </div>


        <!--Bloque2-->
        <div class="row p-3 bg-primary">

            <div class="bg-danger">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                            placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>

            </div>

        </div>
    </div>
</body>

</html>