<?php

namespace lightningsdk\sitemanager_checkout\Pages\Admin;

use lightningsdk\Model\Site;

class Products extends \lightningsdk\checkout\Pages\Admin\Products {

    protected function initSettings() {
        parent::initSettings();
        $this->accessControl['site_id'] = Site::getInstance()->id;
        $this->preset['site_id'] = 'hidden';

        // For affiliate marketplay
        $this->preset['marketplace'] = [
            'type' => 'checkbox',
            'note' => 'If this is checked, any affiliates will be able to see this product through the affiliate marketplace. If it is not checked, they can\'t see it, but they can sell it if they know the link.',
        ];
    }
}
