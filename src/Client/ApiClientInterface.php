<?php

namespace Vendor\Reporter\Client;

interface ClientInterface
{
    /**
     * @param string $url
     * @return array
     */
    public function getReport($url);
}
