@extends('layouts.user')
@section('title', 'Welcome')
@section('content')

<form action="{{action('Admin\UserController@welcome')}}" method="get">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <h2>Welcome</h2>
                
                <div class="py0">
                    <div class="row h5 font-weight-bold">
                        <div class="col-md-10 offset-md-1">
                            <a href="{{ action('Admin\UserController@judge') }}">参加票はこちら</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <a class="button" onclick="location.href='./form'">体調管理表</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <a class="button" onclick="location.href='./user'">マイページ</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <a class="button" onclick="location.href='./PrivacyPolicy'">プライバシーポリシー</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <a class="button" onclick="location.href='./contact'">事務局連絡先</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mt-5">
                            <p span class="questionary-form-group-title"> 事前登録のお願い </p>
                            <h5>
                                <p>「新チャレンジマラソン」には、以下の注意事項をご理解の上、大会当日までに体調管理表へのチェックおよび検温を済ませ、ご参加ください。<br><br>体調管理表へのチェックおよび検温はWEB画面上から登録をお願いいたします。（「体調管理表」ボタンよりご登録ください）<br><br>登録内容が参加基準を満たしている場合は、「参加OK」の画面が表示されますので、当日受付にて「参加OK」画面をご提示ください。</p>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mt-3">
                            <p span class="questionary-form-group-title"> 注意事項 </p>
                            <ul>
                                <li>新型コロナウィルス感染拡大予防のため、走行中以外はマスク類の着用をお願いします</li>
                                <li>走行中のマスク着用は任意とさせていただきますが、唾を吐くなど飛沫感染を助長するような行為はお控えください</li>
                                <li>走行中、 咳をする際は出来うる限り人との距離をとり、顔を背ける、衣類の袖で口を覆うなどして感染拡大予防にご協力ください</li>
                                <li>スタート、ゴール前後にはご自身で用意された飲み物を飲み、誤って他の人の飲み物を飲まないようにしてください。走行中の給水はご用意がございます</li>
                                <li>コロナ感染拡大防止策としてソーシャルディスタンシングにご協力お願いいたします。スタート前は２m以上の距離をとって整列をお願いいたします</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mt-3">
                            <p span class="questionary-form-group-title"> 事務局連絡先 </p>
                            <div class="contact">
                                tell: 090-5450-1759
                            </div>
                            <div class="contact2">
                                mail: new_marathon@kke.biglobe.ne.jp
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>   
    </div>
</form>

@endsection
