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
                    <div class="" > <img class="card-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgGKRDO4ynX42HFFhdiMWPcVUAR3NfvCPwPQ&usqp=CAU" >
                        <div class="card-img-overlay d-flex justify-content-center align-items-center">
                            <h3 class="text-primary font-weight-bold">参加NG</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <h2>参加条件を満たしてません</h2>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item" >アンケートにご回答いただいてますか？</li>
                <li class="list-group-item">2日連続、検温しましたか？</li>
                <li class="list-group-item">体温は37.5度いかでしたか？</li>
                <li class="list-group-item">条件を満たしているにもかかわらず「参加NG」になった場合、事務局にご連絡ください。</li>
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

