<?php

namespace App\Helpers;

use App\Contracts\FileSaver;
use Exception;

class File implements FileSaver
{
    /**
     * @throws Exception
     */
    public function save(string $filename, string $content): void
    {
        if (file_exists($filename)) {
            throw new Exception('File already exists');
        }
        if (file_put_contents($filename, $content) === false){
            throw new Exception('File has not been written');
        }
    }
}
