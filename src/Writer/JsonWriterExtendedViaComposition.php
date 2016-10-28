<?php

namespace Vendor\Reporter\Writer;

class JsonWriterExtendedViaComposition implements WriterInterface
{
    /**
     * @var JsonWriter
     */
    private $jsonWriter;

    /**
     * @param string $directory
     */
    public function __construct($directory)
    {
        $fileName = $directory . '/' . (new \DateTime())->format('Y-m-d_H-i-s');
        $this->jsonWriter = new JsonWriter($fileName);
    }

    /**
     * {@inheritdoc}
     */
    public function write(array $data)
    {
        $this->jsonWriter->write($data);
    }
}
