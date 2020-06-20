<?php

namespace lightningsdk\sitemanager_checkout\Model;

use lightningsdk\checkout\Model\OrderCore;
use lightningsdk\sitemanager\Model\Site;

class Order extends OrderCore {
    public function __construct($data = []) {
        parent::__construct($data);
        $this->site_id = Site::getInstance()->id;
    }

    /**
     * @param $order_id
     * @param $locked
     *
     * @return array
     */
    protected static function loadBySessionCriteria($order_id, $locked) {
        $criteria = parent::loadBySessionCriteria($order_id, $locked);
        $criteria['site_id'] = Site::getInstance()->id;
        return $criteria;
    }

    /**
     * @return Order
     */
    public static function loadOrCreateBySession() {
        $order = parent::loadOrCreateBySession();
        $order->site_id = Site::getInstance()->id;
        $order->save();
        return $order;
    }
}
