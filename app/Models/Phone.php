<?php
/**
 * Created by PhpStorm.
 * User: W
 * Date: 2018/3/15
 * Time: 23:32
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model {


    protected $table = 'phone';

    /**
     * 获得拥有此电话的用户。
     */

    public function user() {
        return $this->belongsTo('App\Models\Form', 'user_id');
    }


    public function form1() {
        return $this->belongsTo('App\Models\Form', 'user_id')->withDefault(function ($user) {
//            'name1' => '游客',
            $user->user = '游客';
        });
    }


    /*
     *   不行的
     * select * from `form` where `form`.`user_id` = 1 and `form`.`user_id` is not null limit 1
     */
    public function user1() {
        return $this->hasOne('App\Models\Form', 'user_id');
    }


}