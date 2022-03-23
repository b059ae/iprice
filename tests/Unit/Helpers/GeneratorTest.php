<?php

use App\Helpers\Generator;

test('Filename helper generates unique filename', function () {
    $extension = 'any';
    $generator = new Generator();
    $filename = $generator->filename($extension);
    expect($filename)->toEndWith($extension);
    $this->assertFileDoesNotExist($filename);
});
