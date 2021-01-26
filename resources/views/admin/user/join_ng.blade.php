@extends('layouts.user')
@section('title', 'ng')
@section('content')

<!DOCTYPE html>
<html>
<form action="{{action('Admin\UserController@judge')}}" method="get">
    <body>
        <div class="container">
            <div class="col-md-10 mx-auto">
                <img class="logo" src="image/ng.png" alt="logo" style="width: 90%;" >
                    
                <div class="questionary-form-group-title mb-3">
                    <label>申し訳ございませんが、参加基準を満たしていないため、ご参加頂けません</label>  
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

