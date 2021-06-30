<?php

include_once '../controller/displayPokemonController.php';

include 'header.php';

/** @var array $pokemons */
?>
<div class="mt-2 mb-2 mx-auto">
    <form class="form-inline" action="../controller/pokemonDetailController.php" method="post">
        <input class="form-control" type="text" placeholder="Search pokemon..." name="pokemon">
        <button class="btn btn-success" type="submit">GO!</button>
    </form>
</div>

<div class="pokemons">
    <?php
    foreach ($pokemons as $pokemon) {
        include 'pokemon_display.php';
    ?>
        </div>
    </a>
<?php
}
?>
</div>
<div class="pagination">
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <?php
                if ($previousPage > 0)
                {
            ?>
                <li class="page-item">
                    <a class="page-link" href="pokedex.php?page=<?php echo $previousPage ?>">
                        <?php echo $previousPage ?>
                    </a>
                </li>
            <?php
                }
            ?>
            <li class="page-item">
                <a class="page-link current" href="#" aria-disabled="true">
                    <?php echo $currentPage ?>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="pokedex.php?page=<?php echo $nextPage ?>">
                    <?php echo $nextPage ?>
                </a>
            </li>
<!--            <li class="page-item">-->
<!--                <a class="page-link" href="#">Next</a>-->
<!--            </li>-->
        </ul>
    </nav>
</div>

<?php

include 'footer.php';
