@extends('layouts.questionary')
@section('title', '編集')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>検温編集</h2>
            <form action="{{action('Admin\QuestionaryController@update')}}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                
                <div class="from-group row">
                    <label class="col-md-2" for="content">体温</label>
                     <div class="col-md-20">
                     <input type="number" step="0.1" class="form-control" name="content" value="{{ $content ->content }}">
                     </div>
                </div>

               <div class="form-group row">
                   <div class="col-md-10">
                        <input type="hidden" name="q1" value="{{ $questionaries->q1 }}">
                        <input type="hidden" name="q2" value="{{ $questionaries->q2 }}">
                        <input type="hidden" name="q3" value="{{ $questionaries->q3 }}">
                        <input type="hidden" name="q4" value="{{ $questionaries->q4 }}">
                        <input type="hidden" name="q5" value="{{ $questionaries->q5 }}">
                        <input type="hidden" name="q6" value="{{ $questionaries->q6 }}">
                        <input type="hidden" name="q7" value="{{ $questionaries->q7 }}">
                        <input type="hidden" name="q8" value="{{ $questionaries->q8 }}">
                        <input type="hidden" name="q9" value="{{ $questionaries->q9 }}">
                        <input type="hidden" name="q10" value="{{ $questionaries->q10 }}">
                        <input type="hidden" name="q11" value="{{ $questionaries->q11 }}">
                        <input type="hidden" name="q12" value="{{ $questionaries->q12 }}">
                        <input type="hidden" name="q13" value="{{ $questionaries->q13 }}">
                        <input type="hidden" name="q14" value="{{ $questionaries->q14 }}">
                        <input type="hidden" name="q15" value="{{ $questionaries->q15 }}">
                       <input type="hidden" name="id" value="{{ $questionaries->id }}">
                       {{ csrf_field() }}
                       <input type="submit" class="button" value="更新">
                   </div>
               </div>
            </form>
        </div>
    </div>
</div>
@endsection