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
    protected $signature = 'dowload:stocks {--dateFrom=""} {--dateTo=""} {--page=1} {--limit=5}';

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
        $dateFrom = $this->option('dateFrom');
        $dateTo = $this->option('dateTo');
        $page = $this->option('page');
        $limit = $this->option('limit');
        $service->saveStocks($dateFrom, $dateTo, $page, $limit);
    }
}
