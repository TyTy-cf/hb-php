
<div class="types justify-content-center">
    <?php
    /** @var Pokemon $pokemon */
    foreach($pokemon->getTypes() as $type)
    {
        ?>
        <img class="type" height="auto" width="92px" src="<?php echo $type->getUrl() ?>" alt="<?php echo $type->getName() ?>.png">
        <?php
    }
    ?>
</div>
