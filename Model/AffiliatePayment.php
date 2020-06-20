<?php

namespace lightningsdk\sitemanager_checkout\Model;

use lightningsdk\checkout\Model\AffiliatePaymentCore;
use lightningsdk\sitemanager\Model\Site;

class AffiliatePayment extends AffiliatePaymentCore {
    public function __construct($data = []) {
        parent::__construct($data);
        $this->site_id = Site::getInstance()->id;
    }
}
