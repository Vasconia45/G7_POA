<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>YouShar3</title>
        <link rel="shortcut icon" href="{{ URL('storage/logos/LogoNameNoBackground.ico')}}">
        <!--HTML-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!--CSS-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('/css/mediaUpload.css') }}">
        <!--JS-->
        <script src="{{asset('jquery-3.6.0.js')}}"></script>
        <script src="{{ asset('js/reset.js') }}"></script>
        <script src="{{ asset('js/login.js') }}"></script>
        <script src="{{ asset('js/register.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/showHide.js') }}"></script>
        <script src="{{ asset('js/weather.js') }}"></script>
        <script src="{{ asset('js/ProfileEdit.js') }}"></script>
    </head>
    <body>
        <div>
            @if(!empty($error))
                <div class="alert alert-danger">
                    {{ $error }}
                </div>
            @endif
        </div>
        <div class="container">
            <form method="POST" enctype="multipart/form-data" id="myform" action="{{ route('UpdateUserProfile')}}">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <div class="row justify-content-center">
                            <h2 class="row d-flex justify-content-center">Edit your profile data</h2> 
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-3">
                                <label for="profpic" class="">Input a profile picture</label>
                            </div>
                            <div class="col-6">
                                <img id="profpic-preview" src="{{ asset('storage/admin/avatar-placeholder.jpg') }}"
                                alt="preview image" style="max-height: 250px;max-width: 250px;">
                            </div>
                            <div class="col-3">
                                <input type="file" id="profpic" name="profpic" />
                            </div> 
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <label for="wallpaper" class="">Input a wallpaper image</label>
                            </div>
                            <div class="col-6">
                                <img id="wallpaper-preview" src="{{ asset('storage/admin/wallpaper-placeholder.png') }}"
                                alt="preview image" style="max-height: 250px;max-width: 250px;">
                            </div>
                            <div class="col-2">
                                <input type="file" id="wallpaper" name="wallpaper" />
                            </div> 
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <label for="desc" class="">Input a desc</label>
                            </div>
                            <div class="col-6">
                                <textarea id="desc" name="desc" rows="4" cols="50"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="row justify-content-center">
                            <div class="col-2">
                                <button type="submit" class="btn btn-default btn-block mt-4" id="btn_upload">Update</button>
                                </td>
                            </div>
                        </div>  
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>