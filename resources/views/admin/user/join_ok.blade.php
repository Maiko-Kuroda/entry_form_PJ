@extends('layouts.user')
@section('title', 'ng')
@section('content')

<!DOCTYPE html>
<html>
<form action="{{action('Admin\UserController@judge')}}" method="get">
    <body>
        <div class="container">
            <div class="row"  style="width: 100%;">
                <div class="col-md-12 mx-auto">
                    <div class="" > <img class="card-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwLvCC1PvQ3FJ9skyBa_uOxniBP32f76bBtA&usqp=CAU" >
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h3 class="text-primary font-weight-bold">参加OK</h3>
                        </div>
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
                    <input type="button" class="mt-3 button" onclick="location.href='./home'"
                    value="戻る">
                </div>
            </div>
        </div>   
    </body>
</form>
</html>@endsection