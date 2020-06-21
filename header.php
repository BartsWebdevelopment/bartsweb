<!doctype html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <link rel="shorcut icon" type="image/pgn" href="img/favicon.png">
    <title>Bart's Web Design | Helping to make your business grow!</title>
</head>
<body>
<header class="header">
    <a class="header__logo" href="#">
        <img src="<?php echo get_bloginfo("template_directory"); ?>/img/logo.png" alt="logo">
    </a>
    <nav class="header__nav">
        <a class="header__logo--active" href="#">Home</a>
        <a href="#">Over</a>
        <a href="#">Diensten</a>
        <a href="#">Blog</a>
        <a href="#">Contact</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </nav>
</header>