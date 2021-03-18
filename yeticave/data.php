<?php

$is_auth = rand(0, 1);

$user_name = 'izumhikmomo'; // укажите здесь ваше имя
/*$categories_list = [
    'sports_equipment' => 'Доски и лыжи',
    'Boots' => 'Ботинки',
    'Fasteners' => 'Крепление',
    'Clothes' => 'Одежда',
    'Head' => 'Инструменты',
    'Various' => 'Разное',
];
$data_list = [
    [
        'Name' => '2014 Rossignol District Snowboard',
        'Cat' => 'sports_equipment',
        'Price' => '10999',
        'URL_Pictures' => 'img/lot-1.jpg',
    ],
    [
        'Name' => 'DC Ply Mens 2016/2017 Snowboard',
        'Cat' => 'sports_equipment',
        'Price' => '159999',
        'URL_Pictures' => 'img/lot-2.jpg',
    ],
    [
        'Name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'Cat' => 'Fasteners',
        'Price' => '8000',
        'URL_Pictures' => 'img/lot-3.jpg',
    ],
    [
        'Name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'Cat' => 'Boots',
        'Price' => '10999',
        'URL_Pictures' => 'img/lot-4.jpg',
    ],

    [
        'Name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'Cat' => 'Clothes',
        'Price' => '7500',
        'URL_Pictures' => 'img/lot-5.jpg',
    ],
    [
        'Name' => 'Маска Oakley Canopy',
        'Cat' => 'Various',
        'Price' => '5400',
        'URL_Pictures' => 'img/lot-6.jpg',
    ],


];*/

$con = mysqli_connect('127.0.0.1', 'root', '', 'yeticave2');
$sql = 'SELECT * FROM categories';
$categories_list = mysqli_query($con, $sql);
if($categories_list){
    echo mysqli_error($con);
}

$categories_list = mysqli_fetch_all($categories_list, MYSQLI_ASSOC);

$sql2 = 'SELECT * FROM lots';
$data_list = mysqli_query($con, $sql2);
if($data_list){
    echo mysqli_error($con);
}

$data_list = mysqli_fetch_all($data_list, MYSQLI_ASSOC);




?>
