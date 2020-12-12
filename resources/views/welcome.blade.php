@extends('layouts.app')
@section('content')
@if(Auth::check())
<a href="{{ route('home') }}" class="btn btn-primary">Return to dashboard</a>
@else
<a href="{{ route('register') }}" class="btn btn-primary">Register</a>
<a href="{{ route('login') }}" class="btn btn-primary">Login</a>
@endif
@endsection
