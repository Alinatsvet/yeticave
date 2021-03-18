<?php
require_once('data.php');
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
    $one = strtotime('now');
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
