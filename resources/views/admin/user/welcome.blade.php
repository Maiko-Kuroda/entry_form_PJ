@extends('layouts.user')
@section('title', 'Welcome')
@section('content')

<form action="{{action('Admin\UserController@welcome')}}" method="get">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Welcome</h2>
            
                <div class="py0">
                    <div class="row">
                        <div class="col-md-10">
                            <a href="{{ action('Admin\UserController@judge') }}">参加票はこちら</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <a class="button" onclick="location.href='./form'">事前アンケート</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <a class="button" onclick="location.href='./temperature/add'">体温入力</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <a class="button" onclick="location.href='./user'">登録内容確認</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <a class="button" onclick="location.href='./contact'">事務局連絡先</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
