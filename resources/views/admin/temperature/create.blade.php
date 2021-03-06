@extends('layouts.base')
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
                    <div class="col-md-5">
                    <input time=text class="form-control temperature-textarea" name="temperature"
                        rows="20">{{ old('temperature') }}</input>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-10">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ $user_id }}">
                        <input type="submit" class="button-2" value="投稿" class="click-form">
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection