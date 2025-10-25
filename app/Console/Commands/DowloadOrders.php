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
    protected $signature = 'dowload:orders';

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
        $service->saveOrders();
    }
}
