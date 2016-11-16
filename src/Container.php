<?php

namespace Vendor\Reporter;

use Vendor\Reporter\Client\GoogleAnalyticsClient;

class Container
{
    /**
     * @var Reporter
     */
    private $reporter;

    /**
     * @var GoogleAnalyticsClient
     */
    private $googleAnalyticsClient;

    /**
     * @param array $configuration
     */
    public function __construct(array $configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return Reporter
     */
    public function getReporter()
    {
        if ($this->reporter === null) {
            $this->reporter = new Reporter($this->getGoogleAnalyticsClient());
        }

        return $this->reporter;
    }

    /**
     * @return GoogleAnalyticsClient
     */
    public function getGoogleAnalyticsClient()
    {
        if ($this->googleAnalyticsClient === null) {
            $this->googleAnalyticsClient = new GoogleAnalyticsClient($this->configuration['foo']);
        }

        return $this->googleAnalyticsClient;
    }
}
