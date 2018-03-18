<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form extends Model {

    const SEX_UN = 0;
    const SEX_BOY = 1;
    const SEX_GIRY = 2;

    protected $table = 'form';


    public static function sex($ind = null) {
        $arr = [
            self::SEX_UN => '未知',
            self::SEX_BOY => '男孩',
            self::SEX_GIRY => '女孩'
        ];

        if ($ind !== null) {
            return array_key_exists($ind, $arr) ? $arr[$ind] : $arr[self::SEX_UN];
        }

        return $arr;
    }


    /**
     * select * from `phone` where `phone`.`form_id` = 1 and `phone`.`form_id` is not null limit 1
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function phone() {
        return $this->hasOne('App\Models\Phone', 'user_id');
    }


    public function manyPhone() {
        return $this->hasMany('App\Models\Phone', 'user_id')
            ->where('id', 2);

    }

}