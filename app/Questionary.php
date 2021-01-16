<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionary extends Model
{
    //
    protected $guarded = array('id');
    public static $rules = array(
        'q1' => 'required',
        'q2' => 'required',
        'q3' => 'required',
        'q4' => 'required',
        'user_id' => 'required',
        );
        
    //これでアンケート内容を引っ張るときにユーザーIDと一致するものを
    public function user()
    {
        return $this->belongsTo('App\User');
    }

  
    // 詳細画面
    public function getQuestionary(Int $questionary_id)
    {
        return $this->with('user')->where('id', $questionary_id)->first();
    }

    protected $fillable = [
        'user_id','q1','q2','q3','q4','content'
    ];

}
