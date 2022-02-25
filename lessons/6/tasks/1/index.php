<?php
/*
 *  Дмитрий Мисюля
 *  Урок 6: Пользовательские функции
 *  Задача 1:
 * Написать функцию для получения итогов (общей информации) о корзине покупок. 
   Функция принимает массив c информацией о выбранных товарах примерно такого вида:
   $product array(
        array('name'=>'Телевизор',  'price'  =>  '400',  'quantity'  =>  1),
        array('name'=>'Телефон',  'price'  =>  '300',  'quantity'  =>  3),
        array('name'=>'Кроссовки',  'price'  =>  '150',  'quantity'  =>  2),
   );
   Возвращает массив, который содержит:
   • Общую сумму покупок
   • Общее количество выбранных товаров
 * */

// определим массив продуктов
$products = array(
    array('name' => 'IPhone', 'price' => 100, 'count' => 2),
    array('name' => 'Sumsung', 'price' => 500, 'count' => 1),
    array('name' => 'Xiaomi', 'price' => 300, 'count' => 3),
);

// определим функцию подсчёта общего кол-ва и суммы
function getTotalInfo($products)
{
    $totalQty = 0;
    $totalPrice = 0;
    foreach ($products as $product) {
        $totalQty += $product['count'];
        $totalPrice += $product['price'];
    }
    return array('totalQty' => $totalQty, 'totalPrice' => $totalPrice);
}

// вывод функции
echo '<pre>';
print_r(getTotalInfo($products));
echo '</pre>';
















