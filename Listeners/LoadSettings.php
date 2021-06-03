<?php

namespace Serakoi\HideProfile\Listeners;

use Flarum\Api\Serializer\ForumSerializer;
use Flarum\Settings\SettingsRepositoryInterface;

class LoadSettingsFromDatabase
{
    protected $packagePrefix = 'flarum-hide-profile.';

    protected $fieldsToGet = [
        'bannerText'
    ];

    protected $settings;

    public function __construct(SettingsRepositoryInterface $settings)
    {
        $this->settings = $settings;
    }

    public function __invoke(ForumSerializer $serializer)
    {
        foreach ($this->fieldsToGet as $field) {
            $key = $this->packagePrefix.$field;
            $attributes[$key] = $this->settings->get($key);
        }

        return $attributes;
    }
}