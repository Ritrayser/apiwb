<?php

namespace App\Services;

use App\Clients\WBClient;
use App\Models\Income;
use App\Models\Order;
use App\Models\Stock;
use App\Models\Sale;

class WBService
{
  private WBClient $client;

  public function __construct(WBClient $client)
  {
    $this->client = $client;
  }

  public function saveStocks(string $dateFrom='', string $dateTo='', int $page=1, int $limit=5)
  {
    $stocks = $this->client->getStocks($dateFrom, $dateTo, $page, $limit);

    foreach ($stocks['data'] as $key => $stock) {

      Stock::updateOrCreate(
        ['nm_id' => $stock['nm_id']],
        [
          'date' => $stock['date'],
          'last_change_date' => $stock['last_change_date'],
          'supplier_article' => $stock['supplier_article'],
          'tech_size' => $stock['tech_size'],
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
    }
  }

  public function saveIncomes(string $dateFrom='', string $dateTo='', int $page=1, int $limit=5)
  {
    $incomes = $this->client->getIncomes($dateFrom, $dateTo, $page, $limit);

    foreach ($incomes['data'] as $key => $income) {

      Income::updateOrCreate(
        ['nm_id' => $income['nm_id']],
        [
          'income_id' => $income['income_id'],
          'number' => $income['number'],
          'date' => $income['date'],
          'last_change_date' => $income['last_change_date'],
          'supplier_article' => $income['supplier_article'],
          'tech_size' => $income['tech_size'],
          'barcode' => $income['barcode'],
          'quantity' => $income['quantity'],
          'total_price' => $income['total_price'],
          'date_close' => $income['date_close'],
          'warehouse_name' => $income['warehouse_name'],
        ]
      );
    }
  }

  public function saveSales(string $dateFrom='', string $dateTo='', int $page=1, int $limit=5)
  {
    $sales = $this->client->getSales($dateFrom, $dateTo, $page, $limit);

    foreach ($sales['data'] as $key => $sale) {
      Sale::updateOrCreate(
        ['nm_id' => $sale['nm_id']],
        [
          'g_number' => $sale['g_number'],
          'date' => $sale['date'],
          'last_change_date' => $sale['last_change_date'],
          'supplier_article' => $sale['supplier_article'],
          'tech_size' => $sale['tech_size'],
          'barcode' => $sale['barcode'],
          'total_price' => $sale['total_price'],
          'discount_percent' => $sale['discount_percent'],
          'is_supply' => $sale['is_supply'],
          'is_realization' => $sale['is_realization'],
          'promo_code_discount' => $sale['promo_code_discount'],
          'warehouse_name' => $sale['warehouse_name'],
          'country_name' => $sale['country_name'],
          'oblast_okrug_name' => $sale['oblast_okrug_name'],
          'region_name' => $sale['region_name'],
          'income_id' => $sale['income_id'],
          'sale_id' => $sale['sale_id'],
          'odid' => $sale['odid'],
          'spp' => $sale['spp'],
          'for_pay' => $sale['for_pay'],
          'finished_price' => $sale['finished_price'],
          'price_with_disc' => $sale['price_with_disc'],
          'subject' => $sale['subject'],
          'category' => $sale['category'],
          'brand' => $sale['brand'],
          'is_storno' => $sale['is_storno'],
        ]
      );
    }
  }

  public function saveOrders(string $dateFrom='', string $dateTo='', int $page=1, int $limit=5)
  {
    $orders = $this->client->getOrders($dateFrom, $dateTo, $page, $limit);

    foreach ($orders['data'] as $key => $order) {
      Order::updateOrCreate(
        ['nm_id' => $order['nm_id']],
        [
          'g_number' => $order['g_number'],
          'date' => $order['date'],
          'last_change_date' => $order['last_change_date'],
          'supplier_article' => $order['supplier_article'],
          'tech_size' => $order['tech_size'],
          'barcode' => $order['barcode'],
          'total_price' => $order['total_price'],
          'discount_percent' => $order['discount_percent'],
          'warehouse_name' => $order['warehouse_name'],
          'oblast' => $order['oblast'],
          'income_id' => $order['income_id'],
          'odid' => $order['odid'],
          'nm_id' => $order['nm_id'],
          'subject' => $order['subject'],
          'category' => $order['category'],
          'brand' => $order['brand'],
          'is_cancel' => $order['is_cancel'],
          'cancel_dt' => $order['cancel_dt'],
        ]
      );
    }
  }
}
