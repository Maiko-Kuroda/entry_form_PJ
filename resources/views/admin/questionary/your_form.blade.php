@extends('layouts.questionary')
@section('title', 'アンケート回答')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>参加事前アンケート</h2>
            <form action="{{action('Admin\QuestionaryController@yourForm')}}" method="get">
                @csrf
                
                <input type="hidden" name="user_id" value="{{ $questionaries->user_id }}">
                <input type="hidden" name="q1" value="{{ $questionaries->q1 }}">
                <input type="hidden" name="q2" value="{{ $questionaries->q2 }}">
                <input type="hidden" name="q3" value="{{ $questionaries->q3 }}">
                <input type="hidden" name="q4" value="{{ $questionaries->q4 }}">
                <input type="hidden" name="content" value="{{ $questionaries->content }}">

                <div class="form-group">
                    <label>２週間以内に海外にいきましたか？</label><span class="label label-danger">必須</span>
                    <div class="form-group">
                        <p class="confirm-input">{!! nl2br(e($questionaries->q1)) !!}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label>風邪ひいてますか？</label><span class="label label-danger">必須</span>
                    <div class="form-group">
                        <p class="confirm-input">{!! nl2br(e($questionaries->q2)) !!}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label>走れますか？</label><span class="label label-danger">必須</span>
                    <div class="form-group">
                        <p class="confirm-input">{!! nl2br(e($questionaries->q3)) !!}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label>寒いよ？</label><span class="label label-danger">必須</span>
                    <div class="form-group">
                        <p class="confirm-input">{!! nl2br(e($questionaries->q4)) !!}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label>ひと言</label><span class="label label-danger">必須</span>
                    <div class="form-group">
                        <p class="confirm-input">{!! nl2br(e($questionaries->content)) !!}</p>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-10">
                        <input type="button" class="button" onclick="location.href='./temperature/、、'"
                            value="体温登録ページへ">
                    </div>
                    <div class="col-md-10">
                        <input type="button" class="button" onclick="location.href='./welcome'"
                            value="TOPページへ">
                    </div>
                </div>
            </form>
        </div>
    </div>



  

</div>

