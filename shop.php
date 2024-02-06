<?php
require_once  __DIR__ . '/public/header.php';

$shoppingCart = [
    ['product' => 'Телефон', 'price' => 1200],
    ['product' => 'Наушники', 'price' => 800],
    ['product' => 'Ноутбук', 'price' => 150],
    ['product' => 'Комьютер', 'price' => 150],
    ['product' => 'Планшет', 'price' => 800],
    ['product' => 'Клавитура', 'price' => 150],
];

function getSales($arr)
{
    if (count($arr) < 1)
    {
        throw new Exception('Корзина пуста!');
    }
    $sale = null;
    $totalPrice = 0;
    foreach ($arr as $item)
    {
        if ($item['price'] > 1000)
        {
            $sale = 10;
        }
        $totalPrice += $item['price'];
    }
    if (count($arr) > 3)
    {
        $sale += 5;
    }
    if ($sale == null)
    {
        return $totalPrice;
    }
    return $totalPrice * ( (100 - $sale) / 100);
}



echo 'Итоговая стоимость с учетом скидок: '.getSales($shoppingCart);
require_once  __DIR__ . '/public/footer.php';