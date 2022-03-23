<?php

use App\Helpers\File;

test('File helper save file with specified filename', function () {
    $tempFilename = 'tests/storage/temp.any';
    $content = 'any content';
    @unlink($tempFilename);
    if (file_exists($tempFilename)){
        throw new Exception('File already exists');
    }

    $file = new File();
    $file->save($tempFilename, $content);

    $this->assertStringMatchesFormatFile($tempFilename, $content);
});

test('File service throws an error if file already exists', function () {
    $tempFilename = 'tests/storage/temp.any';
    file_put_contents($tempFilename, '');

    $file = new File();
    $file->save($tempFilename, 'any content');
})->throws(Exception::class);
