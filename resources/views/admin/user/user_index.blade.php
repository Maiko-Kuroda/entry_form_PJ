@extends('layouts.base')
@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h2 class="head_test">ユーザー一覧</h2>
    
    <form action="{{action('Admin\UserController@index')}}" method="get">
        <div class="col-md-8">
        
          @foreach ($all_users as $user)
          <div class="card" style="color: black">
            <div class="card-haeder p-3 w-100 d-flex">
              <div class="ml-5 d-flex flex-column">
                  <p class="mb-0">{{ $user->name }}</p>
                  <!-- <a href="{{ url('users/' .$user->id) }}" class="text-secondary">{{ $user->id }}</a> -->
              </div>
              <div>
                <a href="{{ action('Admin\UserController@showDetail', ['id' => $user->id]) }}">プロフィール詳細</a>
              </div>
             
            </div>
          </div>
          <td>
            <div>
              <a href="{{ action('Admin\QuestionaryController@showDetail', ['id' => $user->id]) }}">アンケート詳細</a>
              <a href="{{ action('Admin\TemperatureController@showDetail', ['id' => $user->id]) }}">体温詳細</a>
            </div>
            <div>
              
              <label>参加：{{ $user->join_judge() ? "OK" : "NG" }}</label>
            </div>
          </td>
          @endforeach
        </div>
      </form>
    </div>
</div>
@endsection