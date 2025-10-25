<?php

namespace App\Clients;

use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Type\Integer;

class WBClient
{
    public function getStocks(string $dateFrom='', string $dateTo='', int $page=1, int $limit=5): array
    {
        $result = Http::get(config('wb.url') . '/api/stocks', [
            'key' => config('wb.api_token'),
            'dateFrom' => $dateFrom,
            'dateTo' => $dateTo,
            'page' => $page,
            'limit' => $limit,
        ]);
        return $result->json();
    }

    public function getIncomes(string $dateFrom='', string $dateTo='', int $page=1, int $limit=5): array
    {

        $result = Http::get(config('wb.url') . '/api/incomes', [
            'key' => config('wb.api_token'),
            'dateFrom' => $dateFrom,
            'dateTo' => $dateTo,
            'page' => $page,
            'limit' => $limit,
        ]);
        return $result->json();
    }

    public function getSales(string $dateFrom='', string $dateTo='', int $page=1, int $limit=5): array
    {
        $result = Http::get(config('wb.url') . '/api/sales', [
            'key' => config('wb.api_token'),
            'dateFrom' => $dateFrom,
            'dateTo' => $dateTo,
            'page' => $page,
            'limit' => $limit,
        ]);
        return $result->json();
    }

    public function getOrders(string $dateFrom='', string $dateTo='', int $page=1, int $limit=5): array
    {
        $result = Http::get(config('wb.url') . '/api/orders', [
            'key' => config('wb.api_token'),
            'dateFrom' => $dateFrom,
            'dateTo' => $dateTo,
            'page' => $page,
            'limit' => $limit,
        ]);
        return $result->json();
    }
}
