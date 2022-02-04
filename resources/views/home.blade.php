@extends('layouts.main')
@section('main')

@auth
    <h1>{{ Auth::user() -> name }}</h1>
    <a class="btn btn-secondary" href="{{ route('logout') }}">LOGOUT</a>
@else
    <h1>If you wanne see my site you have to login/register</h1>
@endauth

<h1>Register</h1>

<form action= "{{route('register')}}" method="POST">

    @method('POST')
    @csrf

    <label for="name"> Name</label>
    <input type="text" name="name"> <br>

    <label for="email"> E-mail</label>
    <input type="text" name="email"> <br>

    <label for="password"> Password</label>
    <input type="password" name="password"> <br>

    <label for="password-confirmation"> Password confirm</label>
    <input type="password" name="password-confirmation"> <br>

    <input type="submit" value="Register">

</form>

<hr>

<h1>Log in</h1>
<form action= "{{route('login')}}" method="POST">

    @method('POST')
    @csrf

    <label for="email"> E-mail</label>
    <input type="text" name="email"> <br>

    <label for="password"> Password</label>
    <input type="password" name="password"> <br>

    <input type="submit" value="LOGIN">

</form>

@endsection