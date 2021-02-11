<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\Questionary;
use App\Temperature;
use App\User;
use Illuminate\Support\Facades\DB;

class QuestionaryController extends Controller
{
    //アンケート画面表示(get)
    public function form()
    {
        $user_id = Auth::id();
        $ex_questionaries = Questionary::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->first();
        // $questionaries = Questionary::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->first();
        // dd($ex_questionaries);
        if(is_null($ex_questionaries)){
            return view('admin.questionary.form', ["user_id" => $user_id]);
        }else{
            echo "既にご登録いただいています";
        }
    }

    //アンケート内容更新(post)
    public function confirm(Request $request)
    {
        // dd($request);
        //バリデーションを実行（結果に問題があれば処理を中断してエラーを返す）
        // dd($request);
        $this->validate($request, Questionary::$rules);
        $messages = [
            'radio.required' => 'チェックを入れてください',
        ];

        // $request->validate([
        //     'q1'     => 'required',
           
        // ]);

        $validator = Validator::make($request->all(), $messages);

        if ($validator->fails()) {
        return redirect(url("/form"))
                ->withErrors($validator)
                ->withInput();
        }

        //データベース登録
        $questionaries = new Questionary;
        // dd($questionaries);
        $form = $request->all();
        $questionaries->fill($form);
        return view('admin.questionary.confirm',["questionaries" => $questionaries]);
    }

    //アンケート内容確認画面（get）
    public function complete(Request $request)
    {
        // dd($request);
        // $input = $request->except('action');

        if ($request->action === 'back') {
            return redirect()->action('Admin\QuestionaryController@form')->withInput($input);
        }

        // チェックボックス（配列）を改行コード区切りの文字列に
        // if (isset($request->inputs)) {
        //     $request->merge(['inputs' => implode("\n", $request->inputs)]);
        // }

        // データを保存
        $questionaries = new Questionary;
        // dd($questionaries);
        // $value = $request->session()->get('questionary_id');
        $form = $request->all();
        $questionaries->fill($form);
        // Questionary::create($request->all());
        $questionaries->save();

        // 二重送信防止
        $request->session()->regenerateToken();
        return view('admin.user.welcome');
    }

    //コンテンツ編集画面
    public function edit()
    {
        // controllerファイルからbladeファイル へユーザー情報を渡す
        // Auth::user();でログイン中のユーザー情報を取得できる。
        $user_id = Auth::id();
        $questionaries = Questionary::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->first();
        $content = Questionary::where('user_id', Auth::id())->first();
        // dd($your_form);
        return view('admin.questionary.edit', ["questionaries" => $questionaries,'content' => $content]);
    }
    //コンテンツ編集更新
    public function update(Request $request)
    {
        $questionary = Questionary::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->first();
        $questionaries= $request->all();
        unset($questionaries['_token']);
        // ↓fillでフォームから受け取ったデータをユーザーに埋め込む（設定）し保存
        // dd($your_form);
        $questionary->fill($questionaries)->save();
        return redirect('your_form');
    }


    //ユーザーのアンケート登録内容表示(get)
    public function yourForm()
    {
        $user_id = Auth::id();
        // $questionaries = Questionary::all();
        $questionaries = Questionary::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->first();
        // dd($questionaries);
        if(is_null($questionaries)){
            echo "まだ登録がありません";
        }else{
            // dd($questionaries);
            return view('admin.questionary.your_form', ["questionaries" => $questionaries]);
        }
    }

    //登録内容表示（ユーザー全員分)
    public function showDetail(Request $request)
    {
        $user=User::find($request->id);
        $questionaries = $user->questionaries();
        // $questionaries = Questionary::where('user_id', $user)->orderBy('updated_at', 'desc')->first();
        // dd($questionaries->first());
        // $cond_temperatures = Temperature::find($request->id);←モデルでリレーションを張っているため不要
        if(is_null($questionaries->first())){
            echo  "まだ登録がありません";
        }else{
            return view('admin.questionary.show_detail',['user' => $user]);
        }
    }

}
