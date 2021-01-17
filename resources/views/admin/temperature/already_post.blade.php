@extends('layouts.temperature')
@section('title', '登録できません')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
             <h2 class="check">本日は既にご登録済です</h2>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-md-10 ">
            <input type="button" class="button" onclick="location.href='/user'"
                value="戻る">
        </div>
    </div>


</div>