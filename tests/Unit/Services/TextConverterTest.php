<?php

use App\Services\TextConverter;

test('Text service convert string to uppercase', function ($input, $output) {
    $textService = new TextConverter($input);

    expect($textService->uppercase())->toEqual($output);
})->with('uppercase');

test('Text service convert string to alternate case', function ($input, $output) {
    $textService = new TextConverter($input);

    expect($textService->alternate())->toEqual($output);
})->with('alternate');

test('Text service convert string to csv', function ($input, $output) {
    $textService = new TextConverter($input);

    expect($textService->csv())->toEqual($output);
})->with('csv');
