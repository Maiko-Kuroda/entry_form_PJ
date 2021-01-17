@extends('layouts.user')
@section('title', '管理者画面')
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
    <h2>ユーザー一覧</h2>
  
    <form action="{{action('Admin\UserController@index')}}" method="get">
      <div class="col-md-13">
      
        @foreach ($all_users as $user)
            
        <div class="box26">
          <!-- <div class="card-haeder p-3 w-200 d-flex"> -->
            <div class="box-title">
                <p class="mb-0">{{ $user->name }}</p>
                <!-- <a href="{{ url('users/' .$user->id) }}" class="text-secondary">{{ $user->id }}</a> -->
            </div>
            <div>
              <a href="{{ action('Admin\UserController@showDetail', ['id' => $user->id]) }}">プロフィール詳細 /</a>
              <a href="{{ action('Admin\QuestionaryController@showDetail', ['id' => $user->id]) }}">アンケート詳細 /</a>
              <a href="{{ action('Admin\TemperatureController@showDetail', ['id' => $user->id]) }}">体温詳細</a>
            </div>
          <!-- </div> -->
          <td>
            <div>
              <label>参加：{{ $user->join_judge() ? "OK" : "NG" }}</label>
            </div>
          </td>
        </div>
        @endforeach
      </div>
    </form>
    </div>
  </div>
</div>
@endsection