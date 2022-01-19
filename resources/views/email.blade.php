<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--HTML-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container bg-danger">
        <div class="">
            <p id="texto">This is a G7_POA test</p>
            <img src="{{ asset('img/LogoNameNoBackground.png') }}" class="w-50">

            <a href="{{ route('resetMailForm') }}" method="GET">Link</a>
        </div>
    </div>
</body>

</html>