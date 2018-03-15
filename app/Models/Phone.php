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


}