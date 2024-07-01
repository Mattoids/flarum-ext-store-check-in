<?php

namespace Mattoid\StoreCheckIn\Goods;

use Flarum\User\User;
use Mattoid\Store\Goods\After;
use Mattoid\Store\Model\StoreModel;

class CheckInAfter extends After
{

    /**
     * 后置事件，处理失败则自动回滚购买逻辑
     * @param User $user
     * @param StoreModel $store
     * @param $params
     * @return boolean true-处理成功 false-失败回滚
     */
    public static function after(User $user, StoreModel $store, $params) {

        $user = User::query()->where('id', $user->id)->first();
        $user->increment('checkin_card');

        return true;
    }
}
