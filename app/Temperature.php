<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temperature extends Model
{

    //
    protected $guarded = array('id');
    public static $rules = array(
        'temperature' => 'required',
        'user_id' => 'required',
        );
        
    
    protected $fillable = [
        'user_id','temperature'
        ];

    //これでアンケート内容を引っ張るときにユーザーIDと一致するものを
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function entryOk()
    {
        // if(temperatureがユーザーに紐づいた情報をとってくるときに
        // 日時（二日連続）＋体温の情報をとってくる)
        
    }

  
    // 詳細画面
    public function getTemperature(Int $report_id)
    {
        return $this->with('user')->where('id', $temperature_id)->first();
    }
}
