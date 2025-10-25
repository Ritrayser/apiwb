<?php
namespace App\Clients;
use Illuminate\Support\Facades\Http;

class WBClient{
    public function getStocks(): array
    {
        $result = Http::get('http://109.73.206.144:6969/api/stocks', [
            'key'=>'E6kUTYrYwZq2tN4QEtyzsbEBk3ie',
            'dateFrom'=>'2025-10-24',
            'dateTo'=>'',
            'page'=>'1',
            'limit'=>'1',
        ]);
        return $result->json();
    }
}