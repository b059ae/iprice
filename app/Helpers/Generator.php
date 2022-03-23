<?php

namespace App\Helpers;

class Generator
{
    const DATE_FORMAT = 'Y-m-d_H:i:s';
    public function filename(string $extension): string
    {
        do {
            $filename = date(self::DATE_FORMAT).".$extension";
        } while (file_exists($filename));

        return $filename;
    }
}
