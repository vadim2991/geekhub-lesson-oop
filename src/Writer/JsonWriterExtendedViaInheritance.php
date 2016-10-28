<?php

namespace Vendor\Reporter\Writer;

class JsonWriterExtendedViaInheritance extends JsonWriter
{
    /**
     * @param string $directory
     */
    public function __construct($directory)
    {
        $fileName = $directory . '/' . (new \DateTime())->format('Y-m-d_H-i-s');
        parent::__construct($fileName);
    }
}
