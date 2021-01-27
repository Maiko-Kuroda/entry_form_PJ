@extends('layouts.top')
@section('title', '新チャレンジマラソン')
@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <body>
        <div class="container">
            <div class="col-md-12 mx-auto">
                <img class="logo" src="image/ann2.png" alt="logo" style="width: 100%;" >
                    
            
            <div>
        </div>   

        <div class="col-md-12 mx-auto mt-5" style="width: 250px;">
            <h5>
                @if (Route::has('login'))
                    <!-- <div class="top-right links"> -->
                        @auth
                            <a href="{{ url('/welcome') }}">Home</a>
                        @else
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">新規登録 /  </a>
                            @endif
                            <a href="{{ route('login') }}">ログイン</a>
                        @endauth
                    <!-- </div> -->
                @endif
            </h5>
        </div>
    </body>
</html>@endsection
