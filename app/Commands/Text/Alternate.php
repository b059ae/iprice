<?php

namespace App\Commands\Text;

use App\Services\TextConverter;
use LaravelZero\Framework\Commands\Command;

class Alternate extends Command
{
    /**
     * @var string
     */
    protected $signature = 'text:alternate {text : Input string to be converted to alternate case}';

    /**
     * @var string
     */
    protected $description = 'Command converts string to alternate case';

    public function handle(): int
    {
        $text = $this->argument('text');

        $textService = new TextConverter($text);
        $this->info($textService->alternate());

        return 0;
    }
}
