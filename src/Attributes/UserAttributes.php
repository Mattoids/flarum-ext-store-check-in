<?php

namespace Mattoid\StoreCheckIn\Attributes;

use Flarum\Api\Serializer\BasicUserSerializer;
use Flarum\Settings\SettingsRepositoryInterface;
use Flarum\User\User;
use Symfony\Contracts\Translation\TranslatorInterface;

class
UserAttributes
{
    /**
     * @var SettingsRepositoryInterface|mixed
     */
    private $settings;

    /**
     * @var mixed|TranslatorInterface
     */
    private $translator;

    private $post;

    public function __construct()
    {
        $this->settings = resolve(SettingsRepositoryInterface::class);
        $this->translator = resolve(TranslatorInterface::class);
    }


    public function __invoke(BasicUserSerializer $serializer, User $user) {
        $attributes = [];
        $actor = $serializer->getActor();

        $canViewButton = $actor->can('mattoid-store-check-in.group-view');

        $attributes['checkinCard'] = $actor->checkin_card;
        $attributes['canCheckInView'] = $canViewButton;

        return $attributes;
    }
}
