<?php

include_once '../model/ItemCart.php';
include_once '../model/ItemsRepository.php';

include 'session.php';

$items = [];
$sumCart = 0;
$itemsRepo = new ItemsRepository();

if (isset($_SESSION['itemsCart'])) {
    foreach ($_SESSION['itemsCart'] as $itemId => $qty) {
        if ($qty > 0) {
            $explodedId = explode('#', $itemId);
            $item = $itemsRepo->findItemById($explodedId[1]);
            $items[] = new ItemCart($item, $qty);
            $sumCart += $item->getPrice() * $qty;
        }
    }
}
