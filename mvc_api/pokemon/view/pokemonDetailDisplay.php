<?php

/** @var Pokemon $pokemon */
?>
<h1 class="nomPokemon"><?php echo $pokemon->getName() ?> <?php echo $pokemon->getOrder() ?></h1>
<div class="row cadre">
    <div class="col-6 leftDisplay">
        <div class="animation">
            <img width="300px" height="auto" class="logoArtwork" src="<?php echo $pokemon->getLogoArtwork()?>">
        </div>
        <?php include '_type_display.php' ?>
    </div>
    <div class="col-6 rightDisplay">
        <div>
            <h3 class="name">Statistiques</h3>
            <?php
            foreach($pokemon->getStats()as $stat){
                /** @var Stats $stat */
                echo $stat->getName().' : '.$stat->getValue();;
                echo '<div class="barreProgressive">';
                echo '<div class="'.$stat->getCssClass().'" style="width:'.$stat->getPercent().'%"></div>';
                echo'</div>';
            }
            ?>
        </div>
        <div>
            <h3 class="name">Abilities</h3>
            <?php
            foreach ($pokemon->getAbilities() as $ability){
                /** @var Abilities $ability */
                echo '<div class="abilities">';
                echo '<div class="row justify-content-center">';
                echo '<h4 class="ability mr-2">'.$ability->getName().'</h4>';
                if ($ability->isHidden()) {
                    echo '<span class="is-hidden">talent caché</span>';
                }
                echo '</div>';
                echo '<p class="description">'.$ability->getDescription().'</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</div>
