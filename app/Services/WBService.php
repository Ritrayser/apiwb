<?php

namespace App\Services;

use App\Clients\WBClient;
use App\Models\Stock;

class WBService
{
  private WBClient $client;

  public function __construct(WBClient $client)
  {
    $this->client = $client;
  }

  public function saveStocks()
  {
    $stocks = $this->client->getStocks();

    foreach ($stocks['data'] as $key => $stock) {

      Stock::updateOrCreate(
        ['nm_id' => $stock['nm_id']],
        [
          'date' => $stock['date'],
          'last_change_date' => $stock['last_change_date'],
          'supplier_article' => $stock['supplier_article'],
          'tech_size' => $stock['tech_size'], // исправлено, было 'supplier_article'
          'quantity' => $stock['quantity'],
          'is_supply' => $stock['is_supply'],
          'is_realization' => $stock['is_realization'],
          'quantity_full' => $stock['quantity_full'],
          'warehouse_name' => $stock['warehouse_name'],
          'in_way_to_client' => $stock['in_way_to_client'],
          'in_way_from_client' => is_array($stock['in_way_from_client']) ? json_encode($stock['in_way_from_client']) : $stock['in_way_from_client'],
          'subject' => is_array($stock['subject']) ? json_encode($stock['subject']) : $stock['subject'],
          'category' => is_array($stock['category']) ? json_encode($stock['category']) : $stock['category'],
          'brand' => $stock['brand'],
          'sc_code' => $stock['sc_code'],
          'price' => $stock['price'],
          'discount' => $stock['discount'],
        ]
      );
      dd($stock);
    }
  }
}
