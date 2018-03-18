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


    /**
     * 一对一
     */
    public function getUserPhone() {


        $phones = Form::find(1)->phone;
        dd($phones);
    }


    /**
     * 一对一, 定义反向关联
     */
    public function phoneToUser() {

//        $user = Phone::find(1)->user;
        $user = Phone::find(1)->form1;
        dd($user);
    }

    public function hasMany() {
        $phones = Form::find(1)->manyPhone;
        dd($phones);
    }
}