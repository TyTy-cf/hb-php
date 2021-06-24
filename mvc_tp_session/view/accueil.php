<?php

include_once '../controller/displayItemController.php';

include 'header.php';

?>

<a class="btn btn-primary" href="cart.php">Go to cart</a>
<div class="articles">

<?php
/** @var array $items */
foreach ($items as $item) {

    include 'item_display.php';

?>
    <a class="btn btn-success" href="../controller/actionAddItemToCart.php?AddItem=<?php echo $item->getId() ?>">Add to cart</a>
</div>
<?php
}
?>

</div>

<?php

include 'footer.php';






