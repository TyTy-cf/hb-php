<?php
$array = [];
$array['firstPage'] = 'Mon premier texte';
$array['secondPage'] = 'Mon second texte';

if (isset($_GET['page'])) {
    if (isset($array[$_GET['page']])) {
        echo($array[$_GET['page']]);
    }
}
