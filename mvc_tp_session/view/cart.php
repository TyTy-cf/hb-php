<?php

include_once '../controller/getItemFromCart.php';

include 'header.php';

?>

    <a class="btn btn-primary" href="accueil.php">Accueil</a>
<?php
if (count($items) > 0) {
?>
    <a class="btn btn-warning" href="../controller/emptyCart.php">Empty cart</a>
<?php
}
?>
    <div class="articles">

<?php

/** @var array $items */
foreach ($items as $cartItem) {
    /** @var ItemCart $cartItem */
    $item = $cartItem->getItem();

    include 'item_display.php';

    ?>
    <p>Quantity : <?php echo $cartItem->getQuantity() ?></p>
    <a class="btn btn-danger" href="../controller/actionRemoveItemFromCart.php?RemoveItem=<?php echo $item->getId() ?>">Remove</a>
    </div>
    <?php
}
?>
    </div>
<?php
    if (count($items) == 0) {
?>
    <p class="text-center"><strong>Empty cart</strong></p>
<?php
} else {
?>
    <p class="text-center"><strong>Total cart : <?php echo $sumCart ?>€</strong></p>
<?php
}
?>
<?php

include 'footer.php';






