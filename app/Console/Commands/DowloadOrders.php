<?php

namespace App\Console\Commands;

use App\Services\WBService;
use Illuminate\Console\Command;

class DowloadOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dowload:orders {--dateFrom=""} {--dateTo=""} {--page=1} {--limit=5}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(WBService $service)
    {
        $dateFrom = $this->option('dateFrom');
        $dateTo = $this->option('dateTo');
        $page = $this->option('page');
        $limit = $this->option('limit');
        $service->saveOrders($dateFrom, $dateTo, $page, $limit);
    }
}
