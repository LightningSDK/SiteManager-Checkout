<?php

namespace lightningsdk\sitemanager_checkout\Pages\Checkout\Admin;

use lightningsdk\Model\Site;

class Affiliates extends \lightningsdk\checkout\Pages\Admin\Affiliates {
    protected function getAffiliatesDueQuery() {
        $query = parent::getAffiliatesDueQuery();
        $query['from']['where'] = [
            'site_id' => Site::getInstance()->id
        ];
        return $query;
    }
}
