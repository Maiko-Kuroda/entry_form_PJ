@extends('layouts.questionary')
@section('title', 'あなたの体調管理表')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>体調管理表</h2>
            <form action="{{action('Admin\QuestionaryController@yourForm')}}" method="get">
                @csrf
                <input type="hidden" name="q1" value="{{ $questionaries->first()->q1 }}">
                <input type="hidden" name="q2" value="{{ $questionaries->first()->q2 }}">
                <input type="hidden" name="q3" value="{{ $questionaries->first()->q3 }}">
                <input type="hidden" name="q4" value="{{ $questionaries->first()->q4 }}">
                <input type="hidden" name="q5" value="{{ $questionaries->first()->q5 }}">
                <input type="hidden" name="q6" value="{{ $questionaries->first()->q6 }}">
                <input type="hidden" name="q7" value="{{ $questionaries->first()->q7 }}">
                <input type="hidden" name="q8" value="{{ $questionaries->first()->q8 }}">
                <input type="hidden" name="q9" value="{{ $questionaries->first()->q9 }}">
                <input type="hidden" name="q10" value="{{ $questionaries->first()->q10 }}">
                <input type="hidden" name="q11" value="{{ $questionaries->first()->q11 }}">
                <input type="hidden" name="q12" value="{{ $questionaries->first()->q12 }}">
                <input type="hidden" name="q13" value="{{ $questionaries->first()->q13 }}">
                <input type="hidden" name="q14" value="{{ $questionaries->first()->q14 }}">
                <input type="hidden" name="q15" value="{{ $questionaries->first()->q15 }}">
                <input type="hidden" name="content" value="{{ $questionaries->first()->content }}">


                <div class="questionary-form-group-title mb-3">
                    <label>① 参加前2週間において以下の事項の有無</label>
                    
                </div>
                <div class="questionary-form-group ml-5">
                    <label>A_37.5℃以上の発熱はありません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{{$questionaries->q1}}</p>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>B_せき、のどの痛みなど、風邪の症状はありません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{{$questionaries->q2}}</p>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>C_ だるさ、息苦しさはありません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{{$questionaries->q3}}</p>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>D_嗅覚や味覚の異常はありません</label>
                        <div class="form-group">
                            <p class="confirm-input ml-3 font-weight-bold">{{$questionaries->q4}}</p>
                        </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>E_体が重く感じる、疲れやすい等の症状はありません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{{$questionaries->q5}}</p>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>F_新型コロナウイルス感染症陽性と診断された者と濃厚接触はありません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{{$questionaries->q6}}</p>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>G_同居家族や身近な知人に感染が疑われる方はいません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{{$questionaries->q7}}</p>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>H_過去14日以内に政府から入国制限、入国後の観察期間を必要とされている国、<br>地域等への渡航又は当該在住者との濃厚接触はありません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-3 font-weight-bold">{{$questionaries->q8}}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">② マスクやフェイスカバー等を持参している</label>
                    <h6 class="ml-4 mb-2">(受付時や着替え時のスポーツを行っていない時や会話をする際にはマスクを着用する)</h6>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{{$questionaries->q9}}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">③ こまめな手洗い、手指消毒を実施します</label>
                    <h6 class="ml-4 mb-2">(特に備品やドアノブなど共有部に触れた際は必ず実施する)</h6>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{{$questionaries->q10}}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">④ 他の利用者、スタッフとの距離(少なくとも2m以上)を確保します</label>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{{$questionaries->q11}}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑤ 場内では大きな声での会話は避けて、掛け声や応援は行いません</label>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{{$questionaries->q12}}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑥ イベント中やイベント終了後のミーティング等においても、三つの密を避けます</label>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{{$questionaries->q13}}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑦ 感染防止のために施設管理者、イベント管理者が決めたその他の措置の遵守、<br>指示に従います</label>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{{$questionaries->q14}}</p>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑧ イベント終了後2週間以内に新型コロナウイルス感染症を発症した場合は、<br>イベント管理者に 対して、速やかに濃厚接触者の有無について報告します</label>
                    <div class="form-group">
                        <p class="confirm-input ml-5 font-weight-bold">{{$questionaries->q15}}</p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="questionary-form-group-title">検温入力</label>
                    <div class="form-group">
                        <p class="confirm-input ml-5">{{$questionaries->content}}</p>
                        <input type="hidden" name="id" value="{{ $questionaries->id }}">
                       
                        <input type="button" class="button" onclick="location.href='/edit'"
                            value="体温編集">
                            {{ csrf_field() }}
                    </div>
                   
                </div>
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="box26">
                            <p span class="box-title"> ご確認ください </p>
                            <h5>
                                <p>※記入いただいた個人情報は新型コロナウイルス感染症拡大防止対策に関することのみに利用し、それ以外は 利用致しません。<br>チェックデータは1か月間保管をして、その後削除します。</p>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <!-- <div class="col-md-10">
                        ⬅️このまま検温入力する場合はこちら
                        <input type="button" class="button" onclick="location.href='/temperature/add'"
                            value="検温入力ページへ">
                    </div> -->
                    <div class="col-md-10">
                        <input type="button" class="button" onclick="location.href='./user'"
                            value="プロフィールページへ">
                    </div>
                    <div class="col-md-10">
                        <input type="button" class="button" onclick="location.href='./welcome'"
                            value="TOPページへ">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>@endsection