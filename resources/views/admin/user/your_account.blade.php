@extends('layouts.user')
@section('title', 'アカウント')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-pb-3 mx-auto">
            <h2>プロフィール</h2>
            <!-- <div class="row">
                <div class="col-md-3 text-center ">
                    <a class="btn w-75 btn-outline-secondary" onclick="location.href='/home'"
                        style="	box-shadow: 0px 0px 4px  black;	border-color: #f25042;">レポート一覧</a>
                </div>
            </div> -->
            <form action="{{action('Admin\UserController@yourAccount')}}" method="get">
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
                                    <p>{{$your_account->name}}</p>
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
                                        <p>{{$your_account->gender}}</p>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="py0">
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="box26">
                                        <p span class="box-title"> 連絡先（携帯電話）</p>
                                        <p>{{$your_account->mobile_phone}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="box26">
                                        <p span class="box-title"> 緊急連絡先（ご家族等）</p>
                                        <p>{{$your_account->emergency_contact}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="box26">
                                        <p span class="box-title"> E-Mail アドレス</p>
                                        <p>{{$your_account->email}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12 offset-md-1">
                                    <input type="hidden" name="id" value="{{ $your_account->id }}">
                                    {{ csrf_field() }}
                                    <input type="button" class="button" onclick="location.href='./user/edit'"
                                        value="編集する">
                                </div>

                                <div class="col-md-12 offset-md-1">
                                    <input type="button" class="button" onclick="location.href='./your_form'"
                                        value="アンケート登録内容確認">
                                </div>
                                <div class="col-md-12 offset-md-1">
                                    <input type="button" class="button" onclick="location.href='./temperature/your_temperature'"
                                        value="体温登録内容確認">
                                </div>
                                <div class="col-md-12 offset-md-1">
                                    <input type="button" class="button" onclick="location.href='./welcome'"
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