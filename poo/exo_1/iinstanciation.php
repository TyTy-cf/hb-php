<?php

include_once('Style.php');
include_once('Artist.php');
include_once('User.php');

///// Création des styles \\\\\
$style1 = new Style();
$style1->setName('Heavy metal');
$style2 = new Style();
$style2->setName('Trash metal');
$style3 = new Style();
$style3->setName('Hard rock');

///// Création des artistes \\\\\
$artist = new Artist();
$artist->setName('Metallica');
$artist->setBeginningYear(1981);
$artist->setNationality('American');
$artist->addStyle($style1);
$artist->addStyle($style2);
$artist->addStyle($style3);

$user = new User();
$date = (new DateTime())
    ->setDate(1990, 1, 1)
;
$user->setBirthDate($date);
echo $user->getAge();

echo '<br>';

echo $artist;
echo '<ul>';
foreach ($artist->getStyles() as $style) {
    echo '<li>';
    echo $style;
    echo '</li>';
}
echo '</ul>';



