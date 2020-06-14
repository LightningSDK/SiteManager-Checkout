<?php

namespace lightningsdk\sitemanager_checkout\Pages\Admin;

use lightningsdk\Model\Site;

class Orders extends \lightningsdk\checkout\Pages\Admin\Orders {
    protected function initSettings() {
        parent::initSettings();
        $this->accessControl['site_id'] = Site::getInstance()->id;
        $this->preset['site_id'] = 'hidden';
    }
}
