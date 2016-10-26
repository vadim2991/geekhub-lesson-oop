<?php

namespace Vendor\Reporter;

use Vendor\Reporter\Client\ClientInterface;
use Vendor\Reporter\Writer\WriterInterface;

class Reporter
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @param ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $url
     * @param WriterInterface $writer
     */
    public function createReport($url, WriterInterface $writer)
    {
        $data = $this->client->getReport($url);
        $preprocessedData = $this->preProcessData($data);
        $writer->write($preprocessedData);
    }

    /**
     * @param array $data
     * @return array
     */
    private function preProcessData(array $data)
    {
        return $data;
    }
}
