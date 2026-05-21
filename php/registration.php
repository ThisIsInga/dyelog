<?php
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
$result = $query->fetchAll(PDO::FETCH_ASSOC);

if(!count($result)){
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    $query = $pdo->prepare("INSERT INTO `users`(`ID_Access_rights`, `Phone`, `Password`) VALUES (2, ?, ?)");
    $query->execute([$phone, $hashedPassword]);
    
    redir("../Login.php");
} else {
    echo 'Пользователь с таким номером уже существует';
}
?>