<?php

namespace App\Contracts;

interface CsvConverter
{
    public function csv(): string;
}
