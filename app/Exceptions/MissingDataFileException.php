<?php

namespace App\Exceptions;

class MissingDataFileException extends \Exception
{
    public function __construct(string $filename)
    {
        parent::__construct("The data file $filename is missing.");
    }
}
