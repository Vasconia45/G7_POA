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
        <script src="{{ asset('js/mediaUpload.js') }}"></script>
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
            <form method="POST" enctype="multipart/form-data" id="myform" action="{{ route('mediaUploaded', $user->id)}}">
                @csrf
                <input type="hidden" name="idUser" value="{{ $user->id }}" />
                <img class="rounded mx-auto d-block" id="preview-image-before-upload" src="{{ asset('storage/admin/photo-placeholder.jpg') }}"
                alt="preview image" style="max-height: 250px;">
                <div class="row justify-content-center">
                    <div class="col-auto">                      
                        <table style="margin-left:auto;margin-right:auto;">
                            <tr>
                                <td>
                                    <label for="file" class="">Input a file</label>
                                </td>
                                <td>
                                    <input type="file" id="file" name="file" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="category_id" class="">Input a category</label>
                                </td>
                                <td>
                                    <select name="category_id" id="category_id">
                                        <option value="option_select" disabled selected>Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="desc" class="">Input a desc</label>
                                </td>
                                <td>
                                    <textarea id="desc" name="desc" rows="4" cols="50"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-default btn-block mt-4" id="btn_upload">Upload</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>