<?php

include_once '../controller/displayItemController.php';

include 'header.php';

include '../controller/session.php';

//$_SESSION=[];
//session_destroy();

?>

<div class="articles">

<?php
/** @var array $items */
foreach ($items as $item) {

    include 'item_display.php';

?>
    <a href="../controller/actionAddItemToCart.php?AddItem=<?php echo $item->getId() ?>">Add to cart</a>
</div>
<?php
}
?>

</div>

<?php

include 'footer.php';






