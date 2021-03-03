<?php
$is_auth = rand(0, 1);

$user_name = 'Alinatsvet'; // укажите здесь ваше имя
$categories_list=[
    'sports_equipment' =>'Доски и лыжи',
    'Boots' => 'Ботинки',
    'Fasteners' =>'Крепление',
    'Clothes' =>'Одежда',
    'Head' =>'Инструменты',
    'Various'=>'Разное',
];
$data_list = [
    [
        'Name' =>'2014 Rossignol District Snowboard',
        'Cat'=> 'sports_equipment',
        'Price'=>'10999',
        'URL_Pictures'=>'img/lot-1.jpg',
    ],
    [
        'Name'=>'DC Ply Mens 2016/2017 Snowboard',
        'Cat'=> 'sports_equipment',
        'Price'=>'159999',
        'URL_Pictures'=>'img/lot-2.jpg',
    ],
    [
        'Name' =>'Крепления Union Contact Pro 2015 года размер L/XL',
        'Cat'=> 'Fasteners',
        'Price'=>'8000',
        'URL_Pictures'=>'img/lot-3.jpg',
    ],
    [
        'Name' =>'Ботинки для сноуборда DC Mutiny Charocal',
        'Cat'=> 'Boots',
        'Price'=>'10999',
        'URL_Pictures'=>'img/lot-4.jpg',
    ],

    [
        'Name' =>'Куртка для сноуборда DC Mutiny Charocal',
        'Cat'=> 'Clothes',
        'Price'=>'7500',
        'URL_Pictures'=>'img/lot-5.jpg',
    ],
    [
        'Name' =>'Маска Oakley Canopy',
        'Cat'=> 'Various',
        'Price'=>'5400',
        'URL_Pictures'=>'img/lot-6.jpg',
    ],


];

function sum_format($number)
{
    $number = ceil($number);
    $f = true;
    if ($number>=1000){
        $price_n = number_format($number, 0, '.',' ');
    }
    else{
        $price_n=$number;
    }

    if($f==true){
        return $price_n. '<b class=\"rub\">p</b>';
    }
    else{
        return $price_n;
    }
}

function timer()
{
    $now = strtotime('now');
    $now2 = strtotime('tomorrow');
    $now3 = $now2-$now;
    $now4 = floor($now3/3600);
    $now5=floor(($now3-$now4*3600)/60);
    $result=sprintf('%02d:%02d', $now4, $now5);
    return $result;
    
}

function compile_template($template, $template_data)
{
    if (file_exists('templates/' . $template)) {
        ob_start();
        extract($template_data);

        require_once('templates/' . $template);

        return ob_get_clean();
    } else {
        return '404';
    }
}
?>
