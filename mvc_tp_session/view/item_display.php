
<?php
/** @var Item $item */
?>
<div class="article">
    <h2>Item <?php echo $item->getName() ?></h2>
    <h3><?php echo $item->getPrice() ?>€</h3>
    <img class="logo" src="<?php echo $item->getLogo() ?>">
