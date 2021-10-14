<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">
    <title><?php bloginfo('name')?></title>
    <?php wp_head();?>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=get_template_directory_uri();?>/bilder/loggaskogab.jpg.png" type="image/x-icon">
    <link rel="icon" href="<?=get_template_directory_uri();?>/bilder/loggaskogab.jpg.png" type="image/x-icon">
    <link rel="icon" type="image/png" href="<?=get_template_directory_uri();?>/bilder/loggaskogab.jpg.png">
 
</head>

<body>
    <header>
        <a href="<?= get_home_url();?>"><img src="<?=get_template_directory_uri();?>/bilder/loggaskogab.jpg.png" alt="Skog AB logga"></a>
        <nav>
           <?php wp_nav_menu();?>
        </nav>
        <!-- Ikon för hamburgermeny -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Top Navigation Meny -->
        <div class="topnav">

            <!-- Länkarna för hamburgermenyn, dolda i desktop -->
            <div id="myLinks">
            <?php wp_nav_menu();?>
            </div>
            <!-- "Hamburger menu" / "Bar icon" , fälls ut vid klick -->
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </header>