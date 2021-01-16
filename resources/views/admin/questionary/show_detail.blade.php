@extends('layouts.base')
@section('content')

<div class="container">
    <h3>参加事前アンケート</h3>
    <form action="{{action('Admin\QuestionaryController@showDetail')}}" method="get">
  @csrf

  <input type="hidden" name="q1" value="{{ $user->questionaries->q1 }}">
  <input type="hidden" name="q2" value="{{ $user->questionaries->q2 }}">
  <input type="hidden" name="q3" value="{{ $user->questionaries->q3 }}">
  <input type="hidden" name="q4" value="{{ $user->questionaries->q4 }}">
  <input type="hidden" name="content" value="{{ $user->questionaries->content }}">

    <div class="form-group">
        <label>２週間以内に海外にいきましたか？</label><span class="label label-danger"></span>
        <div class="form-group">
            <p class="confirm-input">{!! nl2br(e($user->questionaries->q1)) !!}</p>
        </div>
    </div>
  
  
    <div class="form-group">
        <label>風邪ひいてますか？</label><span class="label label-danger"></span>
        <div class="form-group">
            <p class="confirm-input">{!! nl2br(e($user->questionaries->q2)) !!}</p>
        </div>
    </div>
    <div class="form-group">
        <label>走れますか？</label><span class="label label-danger"></span>
        <div class="form-group">
            <p class="confirm-input">{!! nl2br(e($user->questionaries->q3)) !!}</p>
        </div>
    </div>
    <div class="form-group">
        <label>寒いよ？</label><span class="label label-danger"></span>
        <div class="form-group">
            <p class="confirm-input">{!! nl2br(e($user->questionaries->q4)) !!}</p>
        </div>
    </div>
    <div class="form-group">
        <label>ひと言</label><span class="label label-danger"></span>
        <div class="form-group">
            <p class="confirm-input">{!! nl2br(e($user->questionaries->content)) !!}</p>
        </div>
    </div>
  
  <div class="col-md-12 offset-md-1">
        <input type="button" class="mt-3" onclick="location.href='./user/index'"
            value="TOPページへ">
    </div>

</form>

</div>

