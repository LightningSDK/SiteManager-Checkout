<?php

namespace lightningsdk\sitemanager_checkout\Model;

use lightningsdk\checkout\Model\ProductCore;
use lightningsdk\sitemanager\Model\Site;

class Product extends ProductCore {
    public function __construct($data = []) {
        parent::__construct($data);
        $this->site_id = Site::getInstance()->id;
    }


    public static function loadByQuery($query, $keyed = null) {
        $query['where']['checkout_product.site_id'] = Site::getInstance()->id;
        return parent::loadByQuery($query, $keyed);
    }

    public static function loadAll($where = [], $fields = [], $final = '', $keyed = false) {
        $where['site_id'] = Site::getInstance()->id;
        return parent::loadAll($where, $fields, $final, $keyed);
    }
}
