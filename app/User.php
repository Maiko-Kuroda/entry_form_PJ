<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DateTime;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender' ,'mobile_phone', 'emergency_contact'
    ];

    //ユーザー1人に対して、アンケートは複数紐づいているので、「questionaries」(複数形)
    public function questionaries()
    {
        return $this->hasMany('App\Questionary');
    }

    public function temperatures()
    {
        return $this->hasMany('App\Temperature');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // 参加判断
    public function join_judge()
    {
        //体温ジャッジ
        $temperatures = $this->temperatures->sortBy('updated_at');
        //orderByかな？
        $count = $temperatures->count();
        //   dd($count);
        if ($count < 2){
            return false;
        }
        // dd($temperatures[$count-1]->updated_at);
        $d1 = explode(" ",$temperatures[$count-1]->updated_at);
        $d2 = explode(" ",$temperatures[$count-2]->updated_at);
        // dd($d1[0]);
        // dd($d2[0]);
        $day1 = new DateTime($d1[0]);
        $day2 = new DateTime($d2[0]);
        // dd($day1);
        $interval = $day2->diff($day1);
        $interval = $day1->diff($day2);
        
        // dd($interval);
        $tenp_int= $temperatures->max('temperature');
        // dd($interval);
        // dd(intval($tenp_int), $temperatures->max('temperature'));

        //アンケートジャッジ
        $questionary = $this->questionaries->first();
          // Questionaries::$fillable
        // dd($questionary);
        $count_an = 0;
        //  dd($questionary->q1);

        if($questionary->q1 == "はい"){
            $count_an++;
        }
        if($questionary->q2 == "はい"){
            $count_an++;
        }
        if($questionary->q3 == "はい"){
            $count_an++;
        }
        if($questionary->q4 == "はい"){
            $count_an++;
        }
        if($questionary->q5 == "はい"){
            $count_an++;
        }
        if($questionary->q6 == "はい"){
            $count_an++;
        }
        if($questionary->q7 == "はい"){
            $count_an++;
        }
        if($questionary->q8 == "はい"){
            $count_an++;
        }
        if($questionary->q9 == "はい"){
            $count_an++;
        }
        if($questionary->q10 == "はい"){
            $count_an++;
        }
        if($questionary->q11 == "はい"){
            $count_an++;
        }
        if($questionary->q12 == "はい"){
            $count_an++;
        }
        if($questionary->q13 == "はい"){
            $count_an++;
        }
        if($questionary->q14 == "はい"){
            $count_an++;
        }
        if($questionary->q15 == "はい"){
            $count_an++;
        }
        // dd($count_an);

        if($interval->d == 1 && intval($tenp_int) < 37.5 && $count_an == 15){
            // if($count_an == 15){
            return true;
        }else{
            return false;
        }

        

    }
}
