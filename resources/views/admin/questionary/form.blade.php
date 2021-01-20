@extends('layouts.questionary')
@section('title', 'アンケート回答')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>参加事前アンケート</h2>
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
                <div class="questionary-form-group-title mb-3">
                    <label>① 参加前2週間において以下の事項の有無</label><span class="label label-danger">※全項目必須</span>
                    
                </div>
                <div class="questionary-form-group ml-5">
                    <label>A_平熱を超える発熱はありません</label>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
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
                </div>
                <div class="questionary-form-group ml-5">
                    <label>B_せき、のどの痛みなど、風邪の症状はありません</label>
                    <div class="row">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label ml-5">
                                <input class="form-check-input" type="radio" name="q2" value="はい">はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q2" value="いいえ">いいえ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>C_ だるさ、息苦しさはありません</label>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
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
                </div>
                <div class="questionary-form-group ml-5">
                    <label>D_嗅覚や味覚の異常はありません</label>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
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
                </div>
                <div class="questionary-form-group ml-5">
                    <label>E_体が重く感じる、疲れやすい等の症状はありません</label>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q5" value="はい">はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q5" value="いいえ">いいえ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>F_新型コロナウイルス感染症陽性とされた者と濃厚接触はありません</label>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q6" value="はい">はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q6" value="いいえ">いいえ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>G_同居家族や身近な知人に感染が疑われる方はいません</label>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q7" value="はい">はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q7" value="いいえ">いいえ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="questionary-form-group ml-5">
                    <label>H_過去14日以内に政府から入国制限、入国後の観察期間を必要とされている国、<br>地域と等への渡航又は当該在住者との濃厚接触はありません</label>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q8" value="はい">はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q8" value="いいえ">いいえ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">② マスクやフェイスカバー等を持参している</label><span class="label label-danger">※必須</span>
                    <h6 class="ml-4 mb-2">(受付時や着替え時のスポースを行っていない時や会話をする際にはマスクを着用する)</h6>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q9" value="はい">はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q9" value="いいえ">いいえ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">③ こまめな手洗い、手指消毒を実施します</label><span class="label label-danger">※必須</span>
                    <h6 class="ml-4 mb-2">(特に備品やドアノブなど共有部に触れた際は必ず実施する)</h6>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q10" value="はい">はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q10" value="いいえ">いいえ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">④ 他の利用者、施設管理スタッフとの距離(少なくとも2m以上)を確保します</label><span class="label label-danger">※必須</span>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q11" value="はい">はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q11" value="いいえ">いいえ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑤ 場内では大きな声での会話は避けて、掛け声や応援は行いません</label><span class="label label-danger">※必須</span>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q12" value="はい">はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q12" value="いいえ">いいえ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑥ 利用中や利用後のミーティング等においても、三つの蜜を避けます</label><span class="label label-danger">※必須</span>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q13" value="はい">はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q13" value="いいえ">いいえ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑦ 感染防止のために施設管理者、イベント管理者が決めたその他の措置の遵守、<br>指示に従います</label><span class="label label-danger">※必須</span>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q14" value="はい">はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q14" value="いいえ">いいえ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑧ 利用後2週間以内に新型コロナウイルス感染症を発症した場合は、<br>イベント管理者に 対して、速やかに濃厚接触者の有無について報告します</label>
                    <span class="label label-danger">※必須</span>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q15" value="はい">はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q15" value="いいえ">いいえ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="questionary-form-group-title">意気込み</label><span class="label label-danger">※必須</span>
                    <textarea class="form-control" name="content" rows="3" placeholder="内容を入力してください"></textarea>
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
                    <div class="col-md-10">
                        <button type="submit" class="button">入力内容を確認する</button>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-10">
                        <input type="button" class="button" onclick="location.href='./welcome'"
                            value="戻る">
                    </div>
                </div>
            </form>
            </div>
            @endsection
        </div>
    </div>
</div>
    
