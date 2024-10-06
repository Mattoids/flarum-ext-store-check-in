<?php

use Flarum\Api\Serializer\BasicUserSerializer;
use Flarum\Extend;
use Mattoid\Store\Extend\StoreExtend;
use Mattoid\StoreCheckIn\Attributes\UserAttributes;
use Mattoid\StoreCheckIn\Goods\CheckInAfter;
use Mattoid\StoreCheckIn\Goods\CheckInEnable;
use Mattoid\StoreCheckIn\Goods\CheckInGoods;
use Mattoid\StoreCheckIn\Goods\CheckInValidate;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__.'/js/dist/forum.js')
        ->css(__DIR__.'/less/forum.less'),
    (new Extend\Frontend('admin'))
        ->js(__DIR__.'/js/dist/admin.js')
        ->css(__DIR__.'/less/admin.less'),
    new Extend\Locales(__DIR__.'/locale'),

    (new StoreExtend('checkIn'))
        ->addStoreGoods(CheckInGoods::class)
        ->addValidate(CheckInValidate::class)
//        ->addEnable(CheckInEnable::class)
        ->addAfter(CheckInAfter::class),

//    (new Extend\ApiSerializer(BasicUserSerializer::class))
//        ->attributes(UserAttributes::class),
];
