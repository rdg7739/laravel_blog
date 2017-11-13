@extends('layouts.app')

@section('content')
    <div class='jombotron text-center'>
        <h1>{{$title}}</h1>
        <p>This is larabel application from the 'larabel from scratch'</p>
         @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <p><a class="btn btn-success btn-lg" href='/dashboard' role='button'>Dashboard</a> </p>
                    @else
                        <p><a class="btn btn-primary btn-lg" href='/login' role='button'>Login</a>
                        <a class="btn btn-success btn-lg" href='/register' role='button'>Register</a> </p>
                    @endif
                </div>
            @endif
    </div>
@endsection

