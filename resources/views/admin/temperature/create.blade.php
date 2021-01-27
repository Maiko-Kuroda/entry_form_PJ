@extends('layouts.temperature')
@section('title', '体温の登録')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>今日の体温は？</h2>
            <form action="{{action('Admin\TemperatureController@create')}}" method="post" enctype="multipart/form-data"
                class="create-temperature-form">
                
                @if (count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $e)
                    <li>{{ $e }}</li>
                    @endforeach
                </ul>
                @endif
                <div class="from-group row">
                    <div class="col-md-6">
                    <input type="number" step="0.1" class="form-control temperature-textarea" name="temperature"
                        rows="20">{{ old('temperature') }}※数値のみ入力してください<br>(例: 36.4)</input>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-10">
                        {{ csrf_field() }}
                        <input type="hidden" name="create_day" value="{{ $user_id }}">
                        <input type="hidden" name="user_id" value="{{ $user_id }}">
                        <input type="submit" class="button" value="投稿" class="click-form">
                        
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-10">
                        <input type="button" class="button" onclick="location.href='/welcome'"
                            value="戻る">
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
@endsection