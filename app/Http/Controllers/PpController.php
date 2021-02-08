<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Temperature;
use App\Questionary;
use DateTime;

class PpController extends Controller
{
    
  

    //プラポリ画面
    public function privacy_policy(Request $request)
    {
        return view('admin.user.privacy_policy');
    }




}
