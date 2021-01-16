@extends('layouts.base')
@section('content')

<div class="container">
    <h3>参加事前アンケート</h3>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{action('Admin\QuestionaryController@confirm')}}" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <input type="hidden" name="user_id" value="{{ $user_id }}">
        <div class="form-group">
            <label>２週間以内に海外にいきましたか？</label><span class="label label-danger">必須</span>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="q1" value="はい">はい
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="q1" value="いいえ">いいえ
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>風邪ひいてますか？</label><span class="label label-danger">必須</span>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="q2" value="はい">はい
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="q2" value="いいえ">いいえ
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>走れますか？</label><span class="label label-danger">必須</span>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="q3" value="はい">はい
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="q3" value="いいえ">いいえ
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>寒いよ？</label><span class="label label-danger">必須</span>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="q4" value="はい">はい
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="q4" value="いいえ">いいえ
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>ひと言</label>
            <textarea class="form-control" name="content" rows="3" placeholder="内容を入力してください"></textarea>
        </div>


        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" class="btn btn-primary">入力内容を確認する</button>
            </div>
        </div>
    </form>
</div>

@endsection
