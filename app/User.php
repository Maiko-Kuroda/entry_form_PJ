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
        $temperatures = $this->temperatures->sortBy('updated_at');

        $count = $temperatures->count();
        //   dd($temperatures->max('temperature'));
        //   dd($count);
        if ($count < 2){
            return false;
        }
        $day1 = new DateTime($temperatures[$count-1]->updated_at);
        $day2 = new DateTime($temperatures[$count-2]->updated_at);
        
        $interval = $day1->diff($day2);
        // dd($interval, $temperatures->max('temperature'));
        if($interval->d == 1 && $temperatures->max('temperature') < 37.5){
            return true;
        }else{
            return false;
        }
    }
}
