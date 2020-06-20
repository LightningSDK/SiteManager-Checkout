<?php

namespace lightningsdk\sitemanager_checkout\Model;

use lightningsdk\checkout\Model\CategoryCore;
use lightningsdk\sitemanager\Model\Site;

class Category extends CategoryCore {
    public function __construct($data = []) {
        parent::__construct($data);
        $this->site_id = Site::getInstance()->id;
    }

    public static function loadByQuery($query, $keyed = null) {
        $query['where']['site_id'] = Site::getInstance()->id;
        return parent::loadByQuery($query, $keyed);
    }

    public static function loadAll($where = [], $fields = [], $final = '', $keyed = false) {
        $where['site_id'] = Site::getInstance()->id;
        return parent::loadAll($where, $fields, $final, $keyed);
    }
}
