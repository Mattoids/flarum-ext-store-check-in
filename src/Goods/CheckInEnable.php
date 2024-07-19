<?php

namespace Mattoid\StoreCheckIn\Goods;

use Flarum\User\User;
use Mattoid\Store\Goods\Enable;
use Mattoid\Store\Model\StoreCartModel;
use Mattoid\Store\Model\StoreModel;

class CheckInEnable extends Enable
{
    public static function enable(User $user, StoreModel $store, StoreCartModel $cart) {
        return true;
    }
}
