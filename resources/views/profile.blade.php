<html>
    <head>
        <title>Profile</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="{{ asset('css/profile.css') }}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <div class="container">
    <div id="content" class="content p-0">
        <div class="profile-header">
            <div class="profile-header-cover"></div>
    
            <div class="profile-header-content">
                <div class="profile-header-img">
                    <img src="img/fotoperfil.jfif" alt="" />
                </div>
    
                <div class="profile-header-info">
                    <h4 class="m-t-sm">User Name</h4>
                    <p class="m-b-sm">Description</p>
                    <a href="#" class="btn btn-xs mb-4 text-white" style="background-color: #81C92C;">{!! trans('messages.edit') !!}</a>
                </div>
            </div>
    
            <ul class="profile-header-tab nav nav-tabs">
                <li class="nav-item"><a href="#profile-posts" class="nav-link" data-bs-toggle="tab">{!! trans('messages.posts') !!}</a></li>
                <li class="nav-item"><a href="#profile-photos" class="nav-link" data-bs-toggle="tab">{!! trans('messages.photos') !!}</a></li>
                <li class="nav-item"><a href="#profile-videos" class="nav-link active" data-bs-toggle="tab">{!! trans('messages.videos') !!}</a></li>
            </ul>
        </div>
    
        <div class="profile-container">
            <div class="row row-space-20">
                <div class="col-md-8">
                    <div class="tab-content p-0">
                        <div class="tab-pane active" id="profile-videos">
                            <div class="m-b-10"><b>{!! trans('messages.videos') !!} (15)</b></div>
    
                            <div class="row row-space-2">
                                <div class="col-sm-8">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/3Kf-FlECN7M?showinfo=0"></iframe>
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/izsjRpcgfmk?showinfo=0"></iframe>
                                    </div>
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/j876xgnTVUg?showinfo=0"></iframe>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row row-space-2">
                                <div class="col-sm-4">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wUqH_5memWY?showinfo=0"></iframe>
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wXmu-EYAmKU?showinfo=0"></iframe>
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xS1DghfzuMc?showinfo=0"></iframe>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row row-space-2">
                                <div class="col-sm-4">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v3ZkCLUFrys?showinfo=0"></iframe>
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/toPm-L7Ib44?showinfo=0"></iframe>
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qD8OnPC1fLI?showinfo=0"></iframe>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row row-space-2">
                                <div class="col-sm-4">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Guo7gR0XyaU?showinfo=0"></iframe>
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ADfIlLfs5Bk?showinfo=0"></iframe>
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8Wg1MYjOguI?showinfo=0"></iframe>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row row-space-2">
                                <div class="col-sm-4">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/LbpHB9wbDhY?showinfo=0"></iframe>
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oVWBFkaXMyw?showinfo=0"></iframe>
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div class="embed-responsive embed-responsive-16by9 m-b-2">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/90PRvlhOLSk?showinfo=0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                   
                        <div class="tab-pane fade" id="profile-photos">
                            <div class="m-b-10"><b>{!! trans('messages.photos') !!} (15)</b></div>
    
                            <div class="row row-space-2">
                                <div class="col-sm-8">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                </div>
                            </div>
    
                            <div class="row row-space-2">
                                <div class="col-sm-4">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                </div>
                            </div>
    
                            <div class="row row-space-2">
                                <div class="col-sm-4">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                </div>
                            </div>
    
                            <div class="row row-space-2">
                                <div class="col-sm-4">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                </div>
                            </div>
    
                            <div class="row row-space-2">
                                <div class="col-sm-4">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2">
                                    </div>
                                </div>
    
                                <div class="col-sm-4">
                                    <div>
                                       <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="m-b-2"> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                    
                        <div class="tab-pane fade" id="profile-posts">
                            <div class="m-b-10"><b>{!! trans('messages.posts') !!} (5)</b></div>
                                <div class="col-12">
                                        <div>
                                            <textarea style="width: 100%;" class="m-b-2" readonly>A real man ain't gonna hurt you, becuase that shit gonna hurt him.</textarea>
                                        </div>
                                </div>

                                <div class="col-12">
                                        <div>
                                            <textarea style="width: 100%;" class="m-b-2" readonly>A real man ain't gonna hurt you, becuase that shit gonna hurt him.</textarea>
                                        </div>
                                </div>

                                <div class="col-12">
                                        <div>
                                            <textarea style="width: 100%;" class="m-b-2" readonly>A real man ain't gonna hurt you, becuase that shit gonna hurt him.</textarea>
                                        </div>
                                </div>

                                <div class="col-12">
                                        <div>
                                            <textarea style="width: 100%;" class="m-b-2" readonly>A real man ain't gonna hurt you, becuase that shit gonna hurt him.</textarea>
                                        </div>
                                </div>

                                <div class="col-12">
                                        <div>
                                            <textarea style="width: 100%;" class="m-b-2" readonly>A real man ain't gonna hurt you, becuase that shit gonna hurt him.</textarea>
                                        </div>
                                </div>
                           
                        </div>
                   
                    </div>

                </div>
    
                <div class="col-md-4 hidden-xs hidden-sm">
                    <ul class="profile-info-list">
    
                        <li class="title">{!! trans('messages.friends') !!} (9)</li>
                        <li class="img-list">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#friendModal" class="m-b-5"><img src="https://bootdey.com/img/Content/avatar/avatar2.png"/></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#friendModal" class="m-b-5"><img src="https://bootdey.com/img/Content/avatar/avatar3.png"/></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#friendModal" class="m-b-5"><img src="https://bootdey.com/img/Content/avatar/avatar4.png"/></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#friendModal" class="m-b-5"><img src="https://bootdey.com/img/Content/avatar/avatar5.png"/></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#friendModal" class="m-b-5"><img src="https://bootdey.com/img/Content/avatar/avatar6.png"/></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#friendModal" class="m-b-5"><img src="https://bootdey.com/img/Content/avatar/avatar7.png"/></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#friendModal" class="m-b-5"><img src="https://bootdey.com/img/Content/avatar/avatar8.png"/></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#friendModal" class="m-b-5"><img src="https://bootdey.com/img/Content/avatar/avatar1.png"/></a>
                            <a href="#" data-bs-toggle="modal" data-bs-target="#friendModal" class="m-b-5"><img src="https://bootdey.com/img/Content/avatar/avatar2.png"/></a>
                        </li>
                    </ul>
                    <div class="dropdown ml-4 mt-2">
                        <button type="button" class="btn dropdown-toggle text-white align-items-center justify-content-center ml-lg-2" data-bs-toggle="dropdown" style="background-color: #81C92C;"><i class="bi bi-gear-wide"></i> {!! trans('messages.Settings') !!}</button>
                        <ul class="dropdown-menu bg-white">
                            <li><a class="dropdown-item">{!! trans('messages.Account') !!}</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="{{ route('landingPage')}}">{!! trans('messages.Logout') !!}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer style="background-color: #81C92C;">
        <div class="d-flex align-self-center justify-content-center mt-5">
            <span><a href="#" class="text-dark"><i class="bi bi-envelope-fill"></i></a>{!! trans('messages.contact')!!}</span>
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
            <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#map"><i class="bi bi-geo-alt-fill"></i></a>
        </div>
</footer>

<div class="modal fade" id="map" tabindex="-1" aria-labelledby="map" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                    <iframe src="https://maps.google.com/maps?q=zubirimanteo&t=&z=18&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="friendModal" tabindex="-1" aria-labelledby="friendModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <img class="rounded-circle" style="width: 15%;" src="https://bootdey.com/img/Content/avatar/avatar3.png"/>
                    <h5 class="modal-title ms-3">User Name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-around" style="background-color: #EBF6FF;">
                    <button class="btn text-white" style="background-color: #81C92C;">View profile</button>
                    <button class="btn text-white" style="background-color: #F5851F;">Send Message</button>
                </div>
            </div>
        </div>
</div>     
</body>
</html>