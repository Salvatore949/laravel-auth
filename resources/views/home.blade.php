@extends('layouts.main')
@section('main')
<h1>Log in</h1>
<form>

    <label for="email"> E-mail</label>
    <input type="text" name="email"> <br>

    <label for="password"> Password</label>
    <input type="text" name="password"> <br>

    <input type="submit" value="LOGINS">

</form>

@endsection