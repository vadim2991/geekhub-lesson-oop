<?php

namespace Vendor\Reporter\Writer;

interface WriterInterface
{
    /**
     * @param array $data
     */
    public function write(array $data);
}
