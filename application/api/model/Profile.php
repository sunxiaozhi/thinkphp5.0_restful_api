<?php
/**
 * Created by PhpStorm.
 *
 * User: sunhuanzhi
 * Date: 2018/4/20
 * Time: 16:58
 */

namespace app\api\model;

use think\Model;

class Profile extends Model
{
    protected $type = [
        'birthday' => 'timestamp:Y-m-d',
    ];
}
