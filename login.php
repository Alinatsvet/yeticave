<?php
session_start();
require 'functions.php';
require 'data.php';
require 'userdata.php';

$errors = [];
$logname = false;
$logpass = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $required_fields = ['email', 'password'];
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $errors[$field] = 'Пустое поле';
        }
    }

    if (count($errors) !== 0) {
        $page_content = compile_template('login.php', [
            'errors' => $errors
        ]);
    } else {
        $editname = $_POST['email'];
        foreach ($users as $user) {
            if ($user['user_email'] == $editname) {
                $logname = true;
                $pass = $_POST['password'];
                if ($user['user_password'] == $pass) {
                    $logpass = true;
                    $_SESSION['is_auth'] = $user;
                    header("Location: index.php");
                    break;
                } else {
                    break;
                }
            }
        }

        if (!$logname or !$logpass) {
            $valid = 'Неверный логин или пароль!';
            $page_content = compile_template('login.php', [
                'valid' => $valid
            ]);
        }
    }

}
else {
    $page_content = compile_template('login.php',
        [
            'categories_list' => $categories_list,
            'data_list' => $data_list,
            'times_left' => $times_left]);
}

$layout_content = compile_template('layout.php',
    [   'page_title' => 'Главная страница',
        'page_content'=>$page_content,
        'categories_list' =>$categories_list
    ]);


print($layout_content);
