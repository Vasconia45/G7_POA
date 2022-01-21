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
    <link rel="stylesheet" href="{{ asset('/css/process.css') }}">
</head>
<body>
    <div>
        <div>
            <h1>Username</h1>
            @if (is_countable( $users ) && count( $users ) > 0)
                <table class='table'>
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>    
                            <th>{{$user->user_name}}</th>
                            <th>{{$user->email}}</th>  
                            <th><a href="/userData/{{ $user->id }}">Edit</a></th> </th>          
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
        <div class="d-flex justify-content-center align-items-center mt-5">
            <img src="{{ asset('img/process.gif')}}">
        </div>
    </div>
</body>
?>
</html>