<?php

namespace Vendor\Reporter\Writer;

use Symfony\Component\Yaml\Yaml;

class YamlWriter extends AbstractFileWriter implements WriterInterface
{
    /**
     * {@inheritdoc}
     */
    public function write(array $data)
    {
        $encodedData = Yaml::dump($data);
        $this->writeDataToFile($encodedData);
    }
}
