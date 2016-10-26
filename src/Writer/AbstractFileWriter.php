<?php

namespace Vendor\Reporter\Writer;

abstract class AbstractFileWriter
{
    /**
     * @var string
     */
    private $fileName;

    /**
     * @param string $fileName
     */
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @param string $data
     */
    protected function writeDataToFile($data)
    {
        file_put_contents($this->fileName, $data);
    }
}
