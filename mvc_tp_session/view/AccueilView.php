<?php

include_once '../controller/AccueilController.php';

include 'header.php';

?>

<div class="articles">

<?php
/** @var ItemsRepository $itemRepository */
foreach ($itemRepository->findAllItems() as $item) {

    include 'item_display.php';

?>
    <a href="../controller/AccueilController.php?AddItem=<?php echo $item->getId() ?>">Add to cart</a>
</div>
<?php
}
?>

</div>

<?php

include 'footer.php';






