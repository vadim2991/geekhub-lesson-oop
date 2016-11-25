<?php

namespace Vendor\Reporter;

use Vendor\Reporter\Client\ClientInterface;
use Vendor\Reporter\Client\YandexClient;
use Vendor\Reporter\Writer\JsonWriter;
use Vendor\Reporter\Writer\WriterInterface;
use Vendor\Reporter\Writer\YamlWriter;

class BadReporter2
{
    /**
     * @var ClientInterface
     */
    private $client;

    /**
     * @param string $token
     */
    public function __construct($token)
    {
        $this->client = new YandexClient($token);
    }

    /**
     * @param string $url
     * @param WriterInterface $writer
     */
    public function createReport($url, WriterInterface $writer)
    {
        $data = $this->client->getReport($url);
        $preprocessedData = $this->preProcessData($data);

        if ($writer instanceof YamlWriter) {
            //TODO
        } elseif ($writer instanceof JsonWriter) {
            //TODO
        }

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
