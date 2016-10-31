<!DOCTYPE html>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/config.php'?>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title><?php echo "Войти"?></title>
        <link rel="stylesheet" href="<?php echo $siteUrl.'/public/css/header.css'?>">
        <link rel="stylesheet" href="<?php echo $siteUrl.'/public/css/footer.css'?>">
        <link rel="stylesheet" href="<?php echo $siteUrl.'/public/css/login_regist.css'?>">
        <script src="<?php echo $siteUrl.'/public/js/jquery.js'?>"></script>
        <script src="<?php echo $siteUrl.'/public/js/functions.js'?>"></script>
    </head>
    <body>
        <!-- Start main div-->
        <div id="main">
            <!-- Начало header -->
            <div id="header">
                <a href="index.php"><img src="logo.png" id="logo"></a>
                <div id="exit" hidden>Выйти</div>
            </div>
            <!-- Конец header -->
            <!-- Начало content -->