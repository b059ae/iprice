<?php

namespace App\Services;

use App\Contracts\CsvConverter;
use App\Contracts\FileSaver;

class Csv
{
    private $csvConverter;
    private $fileSaver;

    public function __construct(CsvConverter $csvConverter, FileSaver $fileSaver){

        $this->csvConverter = $csvConverter;
        $this->fileSaver = $fileSaver;
    }

    public function create(string $filename):void
    {
        $this->fileSaver->save($filename, $this->csvConverter->csv());
    }

}
