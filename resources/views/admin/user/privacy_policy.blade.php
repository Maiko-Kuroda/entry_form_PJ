@extends('layouts.user')
@section('title', 'プライバシーポリシー')
@section('content')

<!DOCTYPE html>
<html>
<!-- <form action="{{action('PpController@privacy_policy')}}" method="get"> -->
    <body>
    <div class="container">
        <div class="col-md-10 mx-auto">
            <h2>プライバシーポリシー</h2>
            <div class="row mb-4">
             新チャレンジマラソンでは、 個人情報の重要性を認識し、個人情報の保護に関する法律及び関連法令等を厳守し、 <br>以下の方針に基づき個人情報を適正な管理保護に努め、適切に取り扱います。
            </div>
            <div class="questionary-form-group-title mb-3">
                <label>1.個人情報の取得について</label>
            </div>
            <div class="questionary-form-group ml-5 mb-3">
                <div class="row">
                新チャレンジマラソンは、適法かつ公正な手段によって、個人情報を取得いたします。
                </div>
            </div>
            <div class="questionary-form-group-title mb-3">
                <label>2.個人情報の利用について</label>
            </div>
            <div class="questionary-form-group ml-5 mb-3">
                <div class="row">
                新チャレンジマラソンは、個人情報を、取得の際に示した利用目的の範囲内で、業務の遂行上必要な限りにおいて利用します。 <br>取得した個人情報は主に以下のような目的で利用いたします。
                </div>
            </div>
            
            <div class="questionary-form-group ml-5 mb-3">
                <div class="row">
                【大会の確認や送付を目的とするもの】<br>
                </div>
                <div class="row ml-2">
                １ 大会の申込確認、案内の送付<br>
                2 大会当日、本人が意識を失う等の状況に陥った際のご家族への案内<br>
                </div>
                <div class="row">
                【大会の確認や送付を目的とするもの】<br>
                </div>
                <div class="row ml-2">
                    1 大会の開催案内<br>
                    2 大会参加に先駆けた体調管理表の送付<br>
                    3 大会の協賛会社からのサービス案内<br>
                    4 大会のアンケート<br>
                    5 記録の集計・発表<br>
                    ・当社は、個人情報を第三者との間で共同利用し、または、個人情報の取得の扱いを第三者に委託する場合は、 当該第三者につき厳正な調査を行ったうえ、秘密を保持させるために、適正な監督を行います。<br>
                </div>
            </div>
            <div class="questionary-form-group-title mb-3">
                    <label>3.個人情報の第三者提供ついて</label>
                </div>
                <div class="questionary-form-group ml-5 mb-3">
                    <div class="row">
                    当社は、法令に定める場合を除き、個人情報を、事前に本人の同意を得ることなく、第三者に提供しません。
                    </div>
                </div>
                <div class="questionary-form-group-title mb-3">
                    <label>4.個人情報の管理について</label>
                </div>
                <div class="questionary-form-group ml-5 mb-3">
                    <div class="row">
                    ・当社は個人情報の正確性を保ち、これを安全に管理致します。<br>
                    ・当社は、個人情報の紛失、破壊、改ざん及び漏えいなどを防止するため、不正アクセス、 コンピューターウイルス等に対する適正なセキュリティ対策を講じます。<br>
                    </div>
                </div>
                <div class="questionary-form-group-title mb-3">
                    <label>5.個人情報の開示・訂正・利用停止・消去について</label>
                </div>
                <div class="questionary-form-group ml-5 mb-3">
                    <div class="row">
                    新チャンレジマラソンは、本人が自己の個人情報について、開示・訂正・利用停止・消去等を求める権利を有していることを認識し、 これらの要求がある場合には、要求された方が本人であることを確認させていただいた上で、速やかに対応します。
                    </div>
                </div>



        <div>
<!-- 
        <div class="form-group row">
            <div class="col-md-12 offset-md-1">
                <input type="button" class="mt-3 button" onclick="location.href='/register'"
                value="戻る">
            </div>
        </div> -->
    </div>     
    </body>
<!-- </form> -->
</html>@endsection