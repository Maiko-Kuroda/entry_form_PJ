@extends('layouts.welcome')
@section('title', 'Welcome')
@section('content')
<form action="{{action('Admin\UserController@welcome')}}" method="get">
    <div class="container">
        <div class="row">
        <div class="col-md-8 col-pb-3 mx-auto">
            <h2 class="head_test">Welcome</h2>
        </div>

        <div class="row" style="line-height:1.5rem;text-align:left;height:1.7rem">
            <div>
                <a href="{{ action('Admin\UserController@judge') }}">参加票はこちら</a>
            </div>
        </div>
        <div class="row" style="line-height:1.5rem;text-align:left;height:1.7rem">
            <div class="col-md-10 text-center offset-1">
                <a class="btn w-75 btn-outline-secondary" onclick="location.href='./form'" style="box-shadow: 0px 0px 4px  black;	border-color: #716040;">事前アンケート</a>
            </div>
        </div>
        <div class="row" style="line-height:1.5rem;text-align:left;height:1.7rem">
            <div class="col-md-10 text-center offset-1">
                <a class="btn w-75 btn-outline-secondary" onclick="location.href='./temperature/add'" style="box-shadow: 0px 0px 4px  black;	border-color: #716040;">体温入力</a>
            </div>
        </div>
        <div class="row" style="line-height:1.5rem;text-align:left;height:1.7rem">
            <div class="col-md-10 text-center offset-1">
                <a class="btn w-75 btn-outline-secondary" onclick="location.href='./user'" style="box-shadow: 0px 0px 4px  black;	border-color: #716040;">登録内容確認</a>
            </div>
        </div>
        <div class="row" style="line-height:1.5rem;text-align:left;height:1.7rem">
            <div class="col-md-10 text-center offset-1">
                <a class="btn w-75 btn-outline-secondary" onclick="location.href='./contact'" style="box-shadow: 0px 0px 4px  black;	border-color: #716040;">事務局連絡先</a>
            </div>
        </div>

        
    </div>
</form>

@endsection
