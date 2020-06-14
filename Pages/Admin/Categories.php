<?php

namespace lightningsdk\sitemanager_checkout\Pages\Admin;

use lightningsdk\Model\Site;

class Categories extends \lightningsdk\checkout\Pages\Admin\Categories {

    protected $preset = [
        'site_id' => [
            'default' => null, // set in settings
            'force_default_new' => true,
        ],
    ];

    protected function initSettings() {
        parent::initSettings();
        $this->accessControl['site_id'] = Site::getInstance()->id;
        $this->preset['site_id'] += [
            'type' => 'hidden',
            'default' => Site::getInstance()->id,
        ];
    }
}
