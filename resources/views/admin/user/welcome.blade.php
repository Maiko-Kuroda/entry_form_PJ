@extends('layouts.user')
@section('title', 'Welcome')
@section('content')

<form action="{{action('Admin\UserController@welcome')}}" method="get">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>Welcome</h2>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="box26">
                            <p span class="box-title"> エントリー方法 </p>
                            <ul>
                                <li>事前アンケートをご回答ください（一度のみ）</li>
                                <li>体温を２日連続検温し登録してください（1日1度）</li>
                                <li>上記、基準をみたしていると「参加票」が表示されます</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="py0">
                    <div class="row h5 font-weight-bold">
                        <div class="col-md-10 offset-md-1">
                            <a href="{{ action('Admin\UserController@judge') }}">参加票はこちら</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <a class="button" onclick="location.href='./form'">事前アンケート</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <a class="button" onclick="location.href='./temperature/add'">体温入力</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <a class="button" onclick="location.href='./user'">登録済 内容</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <a class="button" onclick="location.href='./contact'">事務局連絡先</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
