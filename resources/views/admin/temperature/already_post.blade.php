@extends('layouts.temperature')
@section('title', '登録できません')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
             <h2>本日は既にご登録済です</h2>
        </div>
        <form action="{{action('Admin\TemperatureController@create')}}" method="post" enctype="multipart/form-data"
                class="create-temperature-form">
            <div class="form-group row">
                <div class="col-md-10 ">
                    <input type="button" class="button" onclick="location.href='/user'"
                        value="戻る">
                </div>
            </div>
        </form>        

    </div>
    


</div>