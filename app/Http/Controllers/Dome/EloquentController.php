<?php
/**
 * Created by PhpStorm.
 * User: W
 * Date: 2018/3/15
 * Time: 23:35
 */

namespace App\Http\Controllers\Dome;


use App\Http\Controllers\Controller;
use App\Models\Form;
use App\Models\Phone;
use App\User;
use Illuminate\Http\Request;

class EloquentController extends Controller  {

    public function __construct() {
    }

    public function getUserPhone() {


        $phones = Form::find(1)->phone;


        dd($phones);
    }


    public function phoneToUser() {


        $user = Phone::find(1)->user;


        dd($user);
    }
}