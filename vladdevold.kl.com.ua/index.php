<?php

// FrontController:
// Маскировка URL - через .htaccess

// 1. Запуск сеанса:
session_start();

// 2. Определение индентификатора страницы:
                /*    
                $Tid = 0;
                if(isset($_GET["Tid"])){
                    $Tid=$_GET["Tid"];       
                }
                */

$id = "Home";
if (isset($_GET["id"])){
    $id = $_GET["id"];
}
if ($id == "") {
    $id = "Home";
}

// 3. Определение пользователя страницы:
$user = "Гость";
if (isset($_SESSION["user"])) {
	$user = $_SESSION["user"];
} else if (isset($_COOKIE["user"])) {
	$user = $_COOKIE["user"];
}

// 4. Создание контроллера подключений к БД:
require("config/db_config.php");
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// 5. Подгрузка контента страницы и базового шаблона:
include ("pages/$id.php"); 
include ("templates/base.php");

?> 