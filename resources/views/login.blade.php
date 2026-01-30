@extends('layouts.app')

@section('content')
<h1>Login</h1>

@if (!empty($error))
    <p style="color:red">{{ $error }}</p>
@endif

<form method="POST" action="{{ route('login') }}">
    @csrf

    <label>Login</label>
    <input type="text" name="login">

    <label>Password</label>
    <input type="password" name="password">

    <button type="submit">Entrar</button>
</form>
@endsection
