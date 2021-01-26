@extends('layouts.user')
@section('title', 'ok')
@section('content')

<!DOCTYPE html>
<html>
<form action="{{action('Admin\UserController@judge')}}" method="get">
    <body>
    <div class="container">
        <div class="col-md-12 mx-auto">
            <img class="logo" src="image/OK.png" alt="logo" style="width: 90%;" >
                
            <div class="questionary-form-group-title col-md-8 mx-auto">
                <label>当日受付にてこちらの画面をご提示ください</label>  
            </div>
        <div>
        <div class="form-group row">
            <div class="col-md-12 offset-md-1">
                <input type="button" class="mt-3 button" onclick="location.href='/welcome'"
                value="戻る">
            </div>
        </div>
    </div>     
    </body>
</form>
</html>@endsection