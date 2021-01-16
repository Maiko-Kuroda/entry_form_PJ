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
        return view('admin.questionary.form', ["user_id" => $user_id]);
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
        
       
        // dd($inputs);
        // // 配列から文字列に
        // $radio = '';
        // if (isset($request->radio)) {
        //     $radio = implode("\n",$request->radio);
        // }

        //入力内容確認ページのviewに変数を渡して表示
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
        $form = $request->all();
        $questionaries->fill($form);
        // Questionary::create($request->all());
        $questionaries->save();

        // 二重送信防止
        $request->session()->regenerateToken();

        return view('admin.user.welcome');
    }

    //ユーザーのアンケート登録内容表示(get)
    public function yourForm()
    {
        $user_id = Auth::id();
        // $questionaries = Questionary::all();
        // dd($questionaries);
        $questionaries = Questionary::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->first();
        // dd($questionaries);
        return view('admin.questionary.your_form', ["questionaries" => $questionaries]);
    }

    //登録内容表示（ユーザー全員分）
    public function showDetail(Request $request)
    {
        $user=User::find($request->id);
        $questionaries = $user->questionaries();
        dd($questionaries);
        // $cond_temperatures = Temperature::find($request->id);←モデルでリレーションを張っているため不要
        // $questionaries = Questionary::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->first();
        return view('admin.questionary.show_detail',['user' => $user]);

    }



}
