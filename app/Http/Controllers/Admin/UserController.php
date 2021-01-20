<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Temperature;
use App\Questionary;
use DateTime;

class UserController extends Controller
{
    
    // get
    public function edit()
    {
        // controllerファイルからbladeファイル へユーザー情報を渡す
        // Auth::user();でログイン中のユーザー情報を取得できる。
        $your_account = Auth::user();
        return view('admin.user.edit', ['your_account' => $your_account]);
    }
    // post
    public function update(Request $request)
    {
        // $this->validate($request, User::$rules); ←使うなら$rulesを定義する必要
        $user = Auth::user();
        $account_form = $request->all();
        unset($account_form['_token']);
        // ↓　fillでフォームから受け取ったデータをユーザーに埋め込む（設定）し保存
        $user->fill($account_form)->save();
        // return redirect('/user/edit')
        return redirect('user');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    //ユーザー一覧表示（get）
    public function index(Request $request, User $user)
    {
        //↓チェックは、自分がログインしているかどうかを毎回確認する処理。今回はいらない
        //web.phpにミドルウェア、、つけた。
        $all_users = User::where('id', '<>', Auth::id())->get();
        $your_account = Auth::user();
        $user_id = $your_account->id;
        // $request->session()->put('questionary_id', '1');
        // dd($user->join_judge(), $user->join_judge(), $user->join_judge());
        // $questionary = Questionary::find($request->id);
        //一つだけ検索する場合はwhere,複数個検索する場合はwhereInを使用。
        // $questionary = Questionary::where('user_id', $user_id);
        // $questionary = $your_account->questionaries();
        return view('admin.user.user_index', ['all_users' => $all_users]);
    }

    //プロフィール登録内容表示（ログインユーザー分）
    public function yourAccount(Request $request)
    {
        // Auth::user(class名：your_account)によってyour_account.blade.phpにアカウント情報を渡す
        $your_account = Auth::user();
        return view('admin.user.your_account', ['your_account' => $your_account]);
    }

    //プロフィール登録内容表示（ユーザー全員分）
    public function showDetail(Request $request)
    {
        $cond_user = User::find($request->id);
        return view('admin.user.show_detail', ['cond_user' => $cond_user]);
    }

    //home画面
    public function welcome(Request $request)
    {
       //参加票の仕分け処理をいれる
        return view('admin.user.welcome');
    }

    //コンタクト画面
    public function contact(Request $request)
    {
       
        return view('admin.user.contact');
    }

    public function judge(Request $request)
    {
        if(Auth::user()->join_judge()){
            return view('admin.user.join_ok');
        }else{
            return view('admin.user.join_ng');
        }
    }

    public function participant(Request $request, User $user)
    {
        $cond_user = User::find($request->id);
        $temperatures = $cond_user->temperatures->sortBy('updated_at');
        $count = $temperatures->count();
       
        $day1 = new DateTime($temperatures[$count-1]->updated_at);
        $day2 = new DateTime($temperatures[$count-2]->updated_at);
        $interval = $day1->diff($day2);
        
        if($interval->d == 1 && $temperatures->max('temperature') < 37.5){
            return '✔️';
        }else{
            return '-';
        }
        




    }



}
