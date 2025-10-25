<?php

namespace App\Clients;

use Illuminate\Support\Facades\Http;

class WBClient
{
    public function getStocks(): array
    {
        $result = Http::get('http://109.73.206.144:6969/api/stocks', [
            'key' => 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie',
            'dateFrom' => '2025-10-24',
            'dateTo' => '',
            'page' => '1',
            'limit' => '1',
        ]);
        return $result->json();
    }

    public function getIncomes()
    {

        $result = Http::get('http://109.73.206.144:6969/api/incomes', [
            'key' => 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie',
            'dateFrom' => '2025-10-25',
            'dateTo' => '2025-10-26',
            'page' => '1',
            'limit' => '1',
        ]);
        return $result->json();
    }

    public function getSales()
    {
        $result = Http::get('http://109.73.206.144:6969/api/sales', [
            'key' => 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie',
            'dateFrom' => '2025-10-25',
            'dateTo' => '',
            'page' => '1',
            'limit' => '1',
        ]);
        return $result->json();
    }

    public function getOrders()
    {
        $result = Http::get('http://109.73.206.144:6969/api/orders', [
            'key' => 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie',
            'dateFrom' => '2025-10-25',
            'dateTo' => '2025-10-26',
            'page' => '1',
            'limit' => '1',
        ]);
        return $result->json();
    }
}
