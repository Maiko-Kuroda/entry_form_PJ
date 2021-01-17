@extends('layouts.user')
@section('title', 'アカウント')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>プロフィール</h2>
           
            <form action="{{action('Admin\UserController@showDetail')}}" method="get">
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
    
                <div class="py0">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="box26">
                                <p span class="box-title"> 名前 </p>
                                <h5>
                                    <p>{{$cond_user->name}}</p>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="py0">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="box26">
                                    <p span class="box-title"> 性別 </p>
                                    <h5>
                                        <p>{{$cond_user->gender}}</p>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="py0">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="box26">
                                        <p span class="box-title"> 連絡先（携帯電話）</p>
                                        <p>{{$cond_user->mobile_phone}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="box26">
                                        <p span class="box-title"> 緊急連絡先（ご家族等）</p>
                                        <p>{{$cond_user->emergency_contact}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="box26">
                                        <p span class="box-title"> E-Mail アドレス</p>
                                        <p>{{$cond_user->email}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                
                                <div class="col-md-12 offset-md-1">
                                    <input type="button" class="button" onclick="location.href='./index'"
                                        value="戻る">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> @endsection