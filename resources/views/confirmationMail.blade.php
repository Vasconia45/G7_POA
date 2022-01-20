<!DOCTYPE html>
<html lang="en">

<head>

</head>
    <p id="texto">This is the confirmation email for the user registered.</p>
    <img src="{{ URL('img/LogoNameNoBackground.png') }}" class="w-50">
    <form action="{{ route('confirmation')}}" method="GET">
    {{ csrf_field() }}
        <input type="hidden" name="user_name" class="form-control icon2 rounded mt-2" placeholder=" Username" value="{{$user_name}}">
        <input type="hidden" name="email" class="form-control icon2 rounded mt-2" placeholder=" Email" value="{{$email}}">
        <input type="hidden" name="password" class="form-control icon2 rounded mt-2" placeholder=" Password" value="{{$password}}">
        <input type="hidden" name="birth_date" class="form-control icon2 rounded mt-2" placeholder=" Birth_date" value="{{$birth_date}}">
        <button type="submit" class="btn btn-default btn-block mt-4">Verify</button>
    </form>
    
</html>