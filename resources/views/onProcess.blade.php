<!DOCTYPE html>
<html lang="en">

<head>
    <title>Directive by HTML5 UP</title>
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
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th></th>
                </thead>
                <tbody>
                    <tr>
                        <td>Welcome User</td>
                        <td>Email user@user.com</td>
                        <td><a href="{{ route('landingPage')}}">Logout</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center align-items-center mt-5">
            <img src="{{ asset('img/process.gif')}}">
        </div>
    </div>
</body>

</html>