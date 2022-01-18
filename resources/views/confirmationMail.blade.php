<!DOCTYPE html>
<html lang="en">

<head>

</head>
    <p id="texto">This is the confirmation email for the user registered.</p>
    <img src="{{ asset('img/LogoNameNoBackground.png') }}" class="w-50">
    <form>
        <a href="{{ route('confirmation') }}" class="btn btn-link" method="GET">Send<a>
    </form>


</html>