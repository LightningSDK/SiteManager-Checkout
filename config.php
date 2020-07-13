<?php

return [
    'classes' => [
        \lightningsdk\checkout\Model\AffiliatePayment::class => \lightningsdk\sitemanager_checkout\Model\AffiliatePayment::class,
        \lightningsdk\checkout\Model\Category::class => \lightningsdk\sitemanager_checkout\Model\Category::class,
        \lightningsdk\checkout\Model\Order::class => \lightningsdk\sitemanager_checkout\Model\Order::class,
        \lightningsdk\checkout\Model\Product::class => \lightningsdk\sitemanager_checkout\Model\Product::class,
    ],
    'jobs' => [
        'checkout-mailer' => [
            // Override the checkout mailer
            'class' => \lightningsdk\sitemanager_checkout\Jobs\CheckoutMail::class,
        ],
        'amazon-upload-products' => [
            'class' => \Modules\SiteManager\Jobs\AmazonUpload::class,
            'schedule' => '* 3 * * * *',
            'max_threads' => 1,
        ],
    ],
];
