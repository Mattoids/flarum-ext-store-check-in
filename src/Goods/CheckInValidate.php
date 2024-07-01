<?php

namespace Mattoid\StoreCheckIn\Goods;

use Carbon\Carbon;
use Flarum\Foundation\ValidationException;
use Flarum\Settings\SettingsRepositoryInterface;
use Flarum\User\Exception\PermissionDeniedException;
use Flarum\User\User;
use Mattoid\Store\Goods\Validate;
use Mattoid\Store\Model\StoreModel;
use Mattoid\StoreInvite\Model\InviteModel;
use Symfony\Contracts\Translation\TranslatorInterface;

class CheckInValidate extends Validate
{

    /**
     * 前置校验，用于购买商品前验证用户是否允许购买等逻辑
     * @param User $user
     * @param StoreModel $store
     * @param $params
     * @return true
     * @throws PermissionDeniedException
     */
    public static function validate(User $user, StoreModel $store, $params) {
        if (!$user->can('mattoid-store-check-in.group-view')) {
            throw new PermissionDeniedException();
        }

        return true;
    }
}
