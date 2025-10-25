<?php

namespace App\Console\Commands;

use App\Services\WBService;
use Illuminate\Console\Command;

class DowloadStocks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dowload:stocks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'dowloadstoks';

    /**
     * Execute the console command.
     */
    public function handle(WBService $service)
    {
        $service->saveStocks();
    }
}
