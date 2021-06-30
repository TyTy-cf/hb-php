<?php

/** @var Pokemon $pokemon */
?>

<div class="pokemon">
    <a href="pokemonDetail.php?id=<?php echo $pokemon->getId() ?>">
    <img class="miniature" src="<?php echo $pokemon->getLogoSprites()?>">
    <h4><?php echo $pokemon->getName() ?></h4>
    <h4><?php echo $pokemon->getOrder()?></h4>
    <?php include '_type_display.php' ?>



