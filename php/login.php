<?php
session_start();
require_once('./php/Server.php');

function redir($path) {
    header('Location: ' . $path);
    exit();
}

$phone = $_GET['phone'] ?? '';
$password = $_GET['password'] ?? '';

if(empty($phone) || empty($password)) {
    echo 'Заполните все поля';
    exit();
}

$query = $pdo->prepare("SELECT * FROM `users` WHERE `Phone` = ?");
$query->execute([$phone]);
$result = $query->fetch(PDO::FETCH_ASSOC);

if($result){
    if(password_verify($password, $result['Password'])){
        $_SESSION['USER'] = $result;
        $_SESSION['user_id'] = $result['ID_Users'];
        $_SESSION['phone'] = $result['Phone'];
        redir("../Index.php");
    } else {
        echo 'Неверный пароль';
    }
} else {
    echo 'Пользователя с таким номером не существует';
}
?>