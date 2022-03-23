<?php

namespace App\Contracts;

interface FileSaver
{
    public function save(string $filename, string $content): void;
}
