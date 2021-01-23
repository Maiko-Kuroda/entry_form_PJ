<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Questionary;
use App\Temperature;
use Illuminate\Support\Facades\DB;


class TemperatureController extends Controller
{
    //新規投稿画面（get）
    public function add(Request $request)
    {
        $user_id = Auth::id();
        // $request->session()->put("fromUrl", url()->previous());
        
        return view('admin.temperature.create', ["user_id" => $user_id]);
    }

    public function create(Request $request)
    {
        $temperature = new Temperature;
        $form = $request->all();//viewからすべて受け取っている
        $temperature->fill($form);
        $date = date_create($request->date);
        $ex_temperatures = Temperature::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->get();
        $d = $date->format('Y-m-d'); //"2021-01-23"でとれる
        
        $ex_dp = explode(" ",$ex_temperatures[0]->updated_at);
        $ex_d =$ex_dp[0]; //"2021-01-23"で取れる
        
        // $interval = strtotime($d)-strtotime($ex_d);
        // dd($d,$ex_d);
        
            $count=count($ex_temperatures);
        
            // $ex_t = explode(" ",$ex_temperatures);//日付だけとってきた
            // dd($ex_t);
            // $date_array = implode($date);
            // $date_d = explode(" ",$date);
            // dd($date_d[0]);

        if(count($ex_temperatures) == 0){
            $temperature->save();
        }else{
            $interval = strtotime($d)-strtotime($ex_d);
            if($interval == 0){
                return "本日は既にご登録済です";
            }else{
                $temperature->save();
            }
        }
        return redirect('temperature/your_temperature');
    }

    public function showMyTemper(Request $request)
    {
        
        $your_account = Auth::user();
        //日付けを取ってくる
        $date = date_create($request->date);
        $date = date_format($date , 'Y-m-d');
        $temperatures = Temperature::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->get();
        // dd($temperatures);
        return view('admin.temperature.your_temperature', ['temperatures' => $temperatures]);
    }

    //登録内容表示（ユーザー全員分）
    public function showDetail(Request $request)
    {
        $user=User::find($request->id);
        // $cond_temperatures = Temperature::find($request->id);
       
        return view('admin.temperature.show_detail',['user' => $user]);

    }

    
}
