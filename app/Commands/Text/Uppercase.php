<?php

namespace App\Commands\Text;

use App\Services\TextConverter;
use LaravelZero\Framework\Commands\Command;

class Uppercase extends Command
{
    /**
     * @var string
     */
    protected $signature = 'text:uppercase {text : Input string to be converted to uppercase}';

    /**
     * @var string
     */
    protected $description = 'Command converts string to uppercase';

    public function handle(): int
    {
        $text = $this->argument('text');

        $textService = new TextConverter($text);
        $this->info($textService->uppercase());

        return 0;
    }
}
