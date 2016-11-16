<?php

namespace Vendor\Reporter\Client;

class YandexClient implements ClientInterface
{
    /**
     * @param string $url
     * @return array
     */
    public function getReport($url)
    {
        return [
            'visits' => 2056,
        ];
    }
}
