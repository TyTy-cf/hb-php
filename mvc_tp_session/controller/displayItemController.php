<?php

include_once '../model/ItemsRepository.php';

$items = (new ItemsRepository())->findAllItems();

