@extends('layouts.temperature')
@section('title', 'あなたの体温一覧')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>temperature</h2>
            <form action="{{action('Admin\TemperatureController@showDetail')}}" method="get">
            
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="form-group row">
                    <div class="col-md-10 ">
                        <input type="button" class="button" onclick="location.href='/user/index'"
                            value="戻る">
                    </div>
                </div>
                @if($user->temperatures != NULL)
                    @foreach($user->temperatures as $temperature)
                        <div class="form-group row">
                            <div class = 'mt-2'>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <div class="box26">
                                    <!-- <div class="card body"> -->
                                        <p span class="box-title">{{date_format($temperature->updated_at, 'Y-m-d H:i:s')}}</p>
                                        <h5><p>{{$temperature->temperature}}</p></h5> 
                                        <!-- //↑左が変数名、右がカラム名   -->
                                        <!-- <h5><p>{{$temperature->id}}</p></h5>  -->
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </form>
        </div>
    </div>
</div>
@endsection
