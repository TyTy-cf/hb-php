<?php
//var_dump($post_body = file_get_contents('php://input'));

$array = [
    [
        'test' => 'testvalue'
    ],
    [
        'test2' => 'testvalue2'
    ]
];
echo json_encode($array);
