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
    <div>
        <div>
            <h1>Username</h1>
            @if (is_countable( $users ) && count( $users ) > 0)
            <table class='table'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <form method="POST">
                    <tr>
                        <th>{{$user->user_name}}</th>
                        <th>{{$user->email}}</th>
                        <th><a href="/userData/{{ $user->id }}">Edit</a></th>
                        <th><button type="submit" formaction="{{ route('deleteUser')}}" class="btn btn-default"><i class="bi bi-trash-fill text-dark"></i></button></th>
                        </th>
                    </tr>
                    </form>
                    @endforeach
                </tbody>
            </table>
            @else
                <p>There are no users registered.</p>
            @endif
        </div>
    </div>
</body>

</html>