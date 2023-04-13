<!DOCTYPE html>
<html <?php language_attributes();
        error_reporting(E_ERROR | E_PARSE); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= (get_bloginfo('name') != null ? get_bloginfo('name') : "INSTITUTO DE NEUROCIENCIAS | JUNTA DE BENEFICENCIA") ?></title>
    <?php wp_head(); ?>
</head>

<body class="container-fluid w-100 p-0">
   <!-- <div class="sticky-bottom">
        <i class="bi bi-whatsapp text-success"></i>
    </div>-->

    <?php
    get_template_part('template-parts/header-top/header-menu', 'header');
    ?>