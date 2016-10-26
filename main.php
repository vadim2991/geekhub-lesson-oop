<?php

require_once __DIR__ . '/vendor/autoload.php';

$client = new \Vendor\Reporter\Client\GoogleAnalyticsClient('some_secret_token');
$reporter = new \Vendor\Reporter\Reporter($client);
$reporter->createReport('http://example.com', new \Vendor\Reporter\Writer\JsonWriter(__DIR__ . '/report.json'));
