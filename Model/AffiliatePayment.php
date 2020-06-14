<?php

namespace lightningsdk\sitemanager_checkout\Model;

use lightningsdk\Model\Site;

class AffiliatePayment extends \lightningsdk\checkout\Model\AffiliatePaymentOverridable {
    public function __construct($data = []) {
        parent::__construct($data);
        $this->site_id = Site::getInstance()->id;
    }
}
