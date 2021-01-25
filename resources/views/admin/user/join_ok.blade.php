@extends('layouts.user')
@section('title', 'ok')
@section('content')

<!DOCTYPE html>
<html>
<form action="{{action('Admin\UserController@judge')}}" method="get">
    <body>
        <div class="container">
            <div class="row"  style="width: 100%;">
                <div class="col-md-12 mx-auto">
                    <div class="" > <img class="card-img" src="image/OK.png" >
                        <!-- <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h3 class="text-primary font-weight-bold mt-5 mb-0 pt-5">参加OK</h3>
                        </div> -->
                    </div>
                </div>
            </div>
            <div>
                <h2>受付にて、この画面をご提示ください</h2>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" >、、、</li>
                <li class="list-group-item">、、、</li>
                <li class="list-group-item">、、、</li>
                <li class="list-group-item">、、、</li>
            </ul>
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