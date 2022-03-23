<?php

namespace App\Commands\Text;

use App\Helpers\File;
use App\Helpers\Generator;
use App\Services\TextConverter;
use Exception;
use LaravelZero\Framework\Commands\Command;

class Csv extends Command
{
    const OUTPUT_MESSAGE = "CSV created!";
    /**
     * @var string
     */
    protected $signature = 'text:csv {text : Input string to be converted to csv}';

    /**
     * @var string
     */
    protected $description = 'Command converts string to csv';

    /**
     * @throws Exception
     */
    public function handle(): int
    {
        $text = $this->argument('text');

        $csvService = new \App\Services\Csv(new TextConverter($text), new File());
        $generator = new Generator();
        $csvService->create($generator->filename('csv'));

        $this->info(self::OUTPUT_MESSAGE);

        return 0;
    }
}
