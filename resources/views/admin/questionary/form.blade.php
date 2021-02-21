@extends('layouts.questionary')
@section('title', '体調管理表入力')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>体調管理表</h2>
            <form action="{{action('Admin\QuestionaryController@confirm')}}" method="post" id="questions" >
            
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                <input type="hidden" name="user_id" value="{{ $user_id }}">
                <div class="questionary-form-group-title mb-3">
                    <label>① 参加前2週間において以下の事項の有無</label><span class="label label-danger">※全項目必須</span>
                </div>
         
                <div class="questionary-form-group ml-5">
                    <label>A_37.5℃以上の発熱はありません</label>
                    
                    <div class="row " >
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input validate" type="radio" name="q1" value="はい" {{ old("q1") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q1 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input " type="radio" name="q1" value="いいえ" {{ old("q1") === "いいえ"? 'checked="checked"' : '' }}
                                <?php if($data && $data->q1 == "いいえ"){
                                        echo("checked");
                                    }
                                 ?>>いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q1'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q1')}}</li>
                        </div>
                    @endif
                    
                </div>
                <div class="questionary-form-group ml-5">
                    <label>B_せき、のどの痛みなど、風邪の症状はありません</label>
                    <!-- <dt>B_せき、のどの痛みなど、風邪の症状はありません</dt> -->
                    <div class="row">
                    
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input validate required" type="radio" name="q2" value="はい" {{ old("q2") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q2 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q2" value="いいえ" {{ old("q2") === "いいえ"? 'checked="checked"' : '' }}
                                <?php if($data && $data->q2 == "いいえ"){
                                        echo("checked");
                                    }
                                ?>
                                >いいえ
                            </label>
                        </div>
                        
                    </div>
                    @if ($errors->has('q2'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q2')}}</li>
                        </div>
                    @endif
                </div>
                <div class="questionary-form-group ml-5">
                    <label>C_ だるさ、息苦しさはありません</label>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input validate required" type="radio" name="q3" value="はい" {{ old("q3") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q3 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q3" value="いいえ" {{ old("q3") === "いいえ"? 'checked="checked"' : '' }}
                                <?php if($data && $data->q3 == "いいえ"){
                                        echo("checked");
                                    }
                                ?>
                                >いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q3'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q3')}}</li>
                        </div>
                    @endif
                </div>
                <div class="questionary-form-group ml-5">
                    <label>D_嗅覚や味覚の異常はありません</label>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q4" value="はい" {{ old("q4") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q4 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q4" value="いいえ" {{ old("q4") === "いいえ"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q4 == "いいえ"){
                                        echo("checked");
                                    }
                                    ?>>いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q4'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q4')}}</li>
                        </div>
                    @endif
                </div>
                <div class="questionary-form-group ml-5">
                    <label>E_体が重く感じる、疲れやすい等の症状はありません</label>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q5" value="はい" {{ old("q5") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q5 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q5" value="いいえ" {{ old("q5") === "いいえ"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q5 == "いいえ"){
                                        echo("checked");
                                    }
                                    ?>>いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q5'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q5')}}</li>
                        </div>
                    @endif
                </div>
                <div class="questionary-form-group ml-5">
                    <label>F_新型コロナウイルス感染症陽性と診断された者と濃厚接触はありません</label>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q6" value="はい" {{ old("q6") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q6 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q6" value="いいえ" {{ old("q6") === "いいえ"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q6 == "いいえ"){
                                        echo("checked");
                                    }
                                    ?>>いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q6'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q6')}}</li>
                        </div>
                    @endif
                </div>
                <div class="questionary-form-group ml-5">
                    <label>G_同居家族や身近な知人に感染が疑われる方はいません</label>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q7" value="はい" {{ old("q7") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q7 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q7" value="いいえ" {{ old("q7") === "いいえ"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q7 == "いいえ"){
                                        echo("checked");
                                    }
                                    ?>>いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q7'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q7')}}</li>
                        </div>
                    @endif
                </div>
                <div class="questionary-form-group ml-5">
                    <label>H_過去14日以内に政府から入国制限、入国後の観察期間を必要とされている国、<br>地域等への渡航又は当該在住者との濃厚接触はありません</label>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q8" value="はい" {{ old("q8") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q8 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q8" value="いいえ" {{ old("q8") === "いいえ"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q8 == "いいえ"){
                                        echo("checked");
                                    }
                                    ?>>いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q8'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q8')}}</li>
                        </div>
                    @endif
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">② マスクやフェイスカバー等を持参している</label><span class="label label-danger">※必須</span>
                    <h6 class="ml-4 mb-2">(受付時や着替え時のスポーツを行っていない時や会話をする際にはマスクを着用する)</h6>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q9" value="はい" {{ old("q9") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q9 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q9" value="いいえ" {{ old("q9") === "いいえ"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q9 == "いいえ"){
                                        echo("checked");
                                    }
                                    ?>>いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q9'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q9')}}</li>
                        </div>
                    @endif
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">③ こまめな手洗い、手指消毒を実施します</label><span class="label label-danger">※必須</span>
                    <h6 class="ml-4 mb-2">(特に備品やドアノブなど共有部に触れた際は必ず実施する)</h6>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q10" value="はい" {{ old("q10") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q10 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q10" value="いいえ" {{ old("q10") === "いいえ"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q10 == "いいえ"){
                                        echo("checked");
                                    }
                                    ?>>いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q10'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q10')}}</li>
                        </div>
                    @endif
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">④ 他の参加者、スタッフとの距離(少なくとも2m以上)を確保します</label><span class="label label-danger">※必須</span>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q11" value="はい" {{ old("q11") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q11 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q11" value="いいえ" {{ old("q11") === "いいえ"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q11 == "いいえ"){
                                        echo("checked");
                                    }
                                    ?>>いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q11'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q11')}}</li>
                        </div>
                    @endif
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑤ 場内では大きな声での会話は避けて、掛け声や応援は行いません</label><span class="label label-danger">※必須</span>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q12" value="はい" {{ old("q12") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q12 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q12" value="いいえ" {{ old("q12") === "いいえ"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q12 == "いいえ"){
                                        echo("checked");
                                    }
                                    ?>>いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q12'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q12')}}</li>
                        </div>
                    @endif
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑥ イベント中やイベント終了後のミーティング等においても、三つの密を避けます</label><span class="label label-danger">※必須</span>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q13" value="はい" {{ old("q13") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q13 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q13" value="いいえ" {{ old("q13") === "いいえ"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q13 == "いいえ"){
                                        echo("checked");
                                    }
                                    ?>>いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q13'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q13')}}</li>
                        </div>
                    @endif
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑦ 感染防止のために施設管理者、イベント管理者が決めたその他の措置の遵守、<br>指示に従います</label><span class="label label-danger">※必須</span>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q14" value="はい" {{ old("q14") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q14 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q14" value="いいえ" {{ old("q14") === "いいえ"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q14 == "いいえ"){
                                        echo("checked");
                                    }
                                    ?>>いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q14'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q14')}}</li>
                        </div>
                    @endif
                </div>
                <div class="questionary-form-group mb-3">
                    <label class="questionary-form-group-title mb-1">⑧ イベント終了後2週間以内に新型コロナウイルス感染症を発症した場合は、<br>イベント管理者に 対して、速やかに濃厚接触者の有無について報告します</label>
                    <span class="label label-danger">※必須</span>
                    <div class="row">
                        <div class="form-check form-check-inline ml-5">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q15" value="はい" {{ old("q15") === "はい"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q15 == "はい"){
                                        echo("checked");
                                    }
                                    ?>>はい
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="q15" value="いいえ" {{ old("q15") === "いいえ"? 'checked="checked"' : '' }}
                                    <?php if($data && $data->q15 == "いいえ"){
                                        echo("checked");
                                    }
                                    ?>>いいえ
                            </label>
                        </div>
                    </div>
                    @if ($errors->has('q15'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('q15')}}</li>
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="questionary-form-group-title">検温入力</label><span class="label label-danger">※必須</span>
                    <div class="col-md-3">
                        <input type="number" step="0.1" class="form-control temperature-textarea" name="content"
                            rows="20" value="{{ $data -> content }}" {{ old('temperature') }}
                         
                            >{{ old('temperature') }}
                            
                        </input>
                    </div>
                    <div class="col-md-7">
                        ※小数点1桁までの半角数字でご入力ください<br>(例: 36.4)
                    </div>
                    @if ($errors->has('content'))
                        <div class="alert alert-danger pb-0 mb-0 pt-0" >
                            <li>{{$errors->first('content')}}</li>
                        </div>
                    @endif
                </div>
                
                <div class="form-group row">
                    <div class="col-md-10">
                        <button type="submit" class="button" id="submit">入力内容の確認</button>
                        
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
    </div>
</div>
@endsection
