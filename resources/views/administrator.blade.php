<!DOCTYPE html>
<html lang="en">

<head>
    <title>YouShar3</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!--HTML-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--JS-->
    <script src="{{asset('jquery-3.6.0.js')}}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</head>

<body>
    <div>
        @if(session('successful_delete_message'))
        <div class="alert alert-success">
            {{ session('successful_delete_message') }}
        </div>
        @endif
    </div>
    <div>
        @if(session('error_message'))
        <div class="alert alert-success">
            {{ session('error_message') }}
        </div>
        @endif
    </div>
    <div>
        @if(session('successful_message'))
        <div class="alert alert-success">
            {{ session('successful_message') }}
        </div>
        @endif
    </div>
    <div class="container">
        <div>
            <div class="d-flex mt-3">
                <div class="col-1">
                    <img src="{{ URL('storage/admin.png') }}" class="rounded-circle" style="width: 40px;">
                </div>
                <div class="d-flex col-10 justify-content-center">
                    <div class="d-flex col-5">
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" id="search-input"/>
                        <span type="button" class="input-group-text" id="search-btn">
                            <i class="bi bi-search"></i>
                        </span>
                    </div>
                </div>
                <div class="d-flex col-1 align-items-center">
                    <a href="{{ route('logout')}}" class="btn btn-default border bd-dark"><i class="bi bi-box-arrow-right"></i></a>
                </div>
            </div>
            @if (is_countable( $users ) && count( $users ) > 0)
            <table class='table'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <form method="POST" id="usersForm">
                {{ csrf_field() }}
                    @foreach($users as $user)
                        <tr class="align-middle dbUsers">
                            <th>{{$user->user_name}}</th>
                            <th>{{$user->email}}</th>
                            <th><a href="/admin/{{ $user->id }}">Edit</a></th>
                            <th><button formaction="{{ route('deleteUser', $user->id)}}" type="submit" class="btn btn-default"><i class="bi bi-trash-fill text-dark"></i></button></th>
                        </tr>
                    @endforeach
                    </form>
                </tbody>
            </table>
            @else
            <p>There are no users registered.</p>
            @endif
        </div>
    </div>
</body>

</html>