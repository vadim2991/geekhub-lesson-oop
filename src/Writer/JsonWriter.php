<?php

namespace Vendor\Reporter\Writer;

class JsonWriter extends AbstractFileWriter implements WriterInterface
{
    /**
     * {@inheritdoc}
     */
    public function write(array $data)
    {
        $encodedData = json_encode($data);
        $this->writeDataToFile($encodedData);
    }
}
