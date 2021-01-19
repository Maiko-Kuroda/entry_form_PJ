@extends('layouts.questionary')
@section('title', '確認')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>参加事前アンケート</h2>
            <form action="{{action('Admin\QuestionaryController@complete')}}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ $questionaries->user_id }}">
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
                <input type="hidden" name="content" value="{{ $questionaries->content }}">


                <div class="questionary-form-group-title mb-3">
                    <label>① 参加前2週間において以下の事項の有無</label>
                    
                </div>
                <div class="questionary-form-group ml-5">
                    <label>A_平熱を超える発熱はありません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{!! nl2br(e($questionaries->q1)) !!}</p>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>B_せき、のどの痛みなど、風邪の症状はありません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{!! nl2br(e($questionaries->q2)) !!}</p>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>C_ だるさ、息苦しさはありません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{!! nl2br(e($questionaries->q3)) !!}</p>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>D_嗅覚や味覚の異常はありません</label>
                        <div class="form-group">
                            <p class="confirm-input ml-3 font-weight-bold">{!! nl2br(e($questionaries->q4)) !!}</p>
                        </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>E_体が重く感じる、疲れやすい等の症状はありません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{!! nl2br(e($questionaries->q5)) !!}</p>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>F_新型コロナウイルス感染症陽性とされた者と濃厚接触はありません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{!! nl2br(e($questionaries->q6)) !!}</p>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>G_同居家族や身近な知人に感染が疑われる方はいません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{!! nl2br(e($questionaries->q7)) !!}</p>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>H_過去14日以内に政府から入国制限、入国後の観察期間を必要とされている国、<br>地域と等への渡航又は当該在住者との濃厚接触はありません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{!! nl2br(e($questionaries->q8)) !!}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">② マスクやフェイスカバー等を持参している</label>
                    <h6 class="ml-4 mb-2">(受付時や着替え時のスポースを行っていない時や会話をする際にはマスクを着用する)</h6>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{!! nl2br(e($questionaries->q9)) !!}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">③ こまめな手洗い、手指消毒を実施します</label>
                    <h6 class="ml-4 mb-2">(特に備品やドアノブなど共有部に触れた際は必ず実施する)</h6>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{!! nl2br(e($questionaries->q10)) !!}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">④ 他の利用者、施設管理スタッフとの距離(少なくとも2m以上)を確保します</label>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{!! nl2br(e($questionaries->q11)) !!}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑤ 場内では大きな声での会話は避けて、掛け声や応援は行いません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{!! nl2br(e($questionaries->q12)) !!}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑥ 利用中や利用後のミーティング等においても、三つの蜜を避けます</label>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{!! nl2br(e($questionaries->q13)) !!}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑦ 感染防止のために施設管理者、イベント管理者が決めたその他の措置の遵守、<br>指示に従います</label>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{!! nl2br(e($questionaries->q14)) !!}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑧ 利用後2週間以内に新型コロナウイルス感染症を発症した場合は、<br>イベント管理者に 対して、速やかに濃厚接触者の有無について報告します</label>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{!! nl2br(e($questionaries->q15)) !!}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="questionary-form-group-title">意気込み</label>
                    <textarea class="form-control" name="content" rows="3" placeholder="内容を入力してください"></textarea>
                </div>
                <div class="form-group row">
                    <div class="col-md-10 ">
                        <button type="submit" name="action" value="back" class="button">戻る</button>
                        <button type="submit" name="action" value="{{ $questionaries->id }}" class="button">送信</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

