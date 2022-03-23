<?php

namespace App\Services;

use App\Contracts\CsvConverter;

class TextConverter implements CsvConverter
{
    private $text;
    const CSV_DELIMITER = ',';

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function uppercase(): string
    {
        return strtoupper($this->text);
    }

    public function alternate(): string
    {
        $converted = '';
        for ($i = 0, $len = strlen($this->text); $i < $len; $i++) {
            $converted .= $i % 2
                ? strtoupper($this->text[$i])
                : strtolower($this->text[$i]);
        }
        return $converted;
    }

    public function csv(): string
    {
        $converted = '';
        for ($i = 0, $len = strlen($this->text); $i < $len; $i++) {
            $converted .= $this->text[$i];
            if ($i < $len - 1) {
                $converted .= self::CSV_DELIMITER;
            }
        }
        return $converted;
    }

}
