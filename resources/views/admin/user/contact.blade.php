@extends('layouts.user')
@section('title', 'アカウント')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10 mx-auto">
      <h2>事務局連絡先</h2>
      <ul class="list-group list-group-flush mx-auto" style="width: 80%;">
        <li class="list-group-item" >tell: 090-5450-1759</li>
        <li class="list-group-item">mail: new_marathon@kke.biglobe.ne.jp</li>
        <li class="list-group-item"></li>
      </ul>
    </div>
    <div class="form-group row">
      <div class="col-md-10">
        <input type="button" class="button" onclick="location.href='./welcome'"
            value="戻る">
      </div>
    </div>
  </div>
</div>@endsection