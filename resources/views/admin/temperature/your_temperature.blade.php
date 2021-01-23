@extends('layouts.temperature')
@section('title', 'あなたの体温一覧')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>my temperature</h2>
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
                    <div class="col-md-10 ">
                        <!-- <input type="hidden" name="id" value="{{-- $report->id --}}"> -->
                        <!-- ↑いらない。新規投稿だったらidに紐付ける必要なし -->
                        <a href="/temperature/add" input type="button" class="button">新規投稿</a>
                        <input type="button" class="button" onclick="location.href='/user'"
                        value="プロフィールページへ">
                        
                        <input type="button" class="button" onclick="location.href='/welcome'"
                            value="TOPページへ">
                        
                    </div>
                </div>
               
                @foreach($temperatures as $temperature)

                <div class="form-group row">
                    <div class = 'mt-2'>
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <div class="box26">
                            <!-- <div class="card body"> -->
                                <p span class="box-title">{{date_format($temperature->updated_at, 'Y-m-d')}}</p>
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
