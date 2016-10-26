<?php

namespace Vendor\Reporter\Client;

class GoogleAnalyticsClient implements ClientInterface
{
    /**
     * @var string
     */
    private $accessToken;

    /**
     * @param string $accessToken
     */
    public function __construct($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * {@inheritdoc}
     */
    public function getReport($url)
    {
        // Connect to Google API using $this->accessToken and retrieve report data
        return [
            'visits' => 100,
        ];
    }
}
