@extends('layouts.base')
@section('title', 'あなたの体温一覧')
@section('content')
<div class="row">
    <div class="col-md-3 text-center " >
        <a class="btn w-75 btn-outline-secondary" onclick="location.href='/home'" style="	box-shadow: 0px 0px 4px  black;	border-color: #f25042;">Topページへ</a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2 class="head_test">my temperature</h2>
            <form action="{{action('Admin\TemperatureController@showMyTemper')}}" method="get">
            {{-- 新規登録 --}}
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                {{-- 新規登録 --}}
                <div class="form-group row">
                    <div class="col-md-10 offset-md-1">
                        <!-- <input type="hidden" name="id" value="{{-- $report->id --}}"> -->
                        <!-- ↑いらない。新規投稿だったらidに紐付ける必要なし -->
                        <a href="/temperature/add" input type="button" class="button-3">新規投稿</a>
                    </div>
                </div>
                @foreach($temperatures as $temperature)

                <div class="form-group row">
                    <div class = 'mt-2'>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <div class="box26">
                            <!-- <div class="card body"> -->
                                <p span class="box-title">{{date_format($temperature->updated_at, 'Y-m-d H:i:s')}}</p>
                                <h5><p>{{$temperature->temperature}}</p></h5>   
                                <!-- <h5><p>{{$temperature->id}}</p></h5>  -->
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
                @endforeach
            </form>
        </div>
    </div>
</div>
@endsection
