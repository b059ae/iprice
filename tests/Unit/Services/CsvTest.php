<?php

use App\Helpers\File;
use App\Services\Csv;
use App\Services\TextConverter;

test('Service saves file in csv format with specified filename', function ($input, $output) {
    $tempFilename = 'tests/storage/temp.csv';
    @unlink($tempFilename);
    if (file_exists($tempFilename)){
        throw new Exception('File already exists');
    }
    $textConverter = new TextConverter($input);

    $csvService = new Csv($textConverter, new File());
    $csvService->create($tempFilename);

    $this->assertStringMatchesFormatFile($tempFilename, $output);

    unlink($tempFilename);
})->with('csv');
