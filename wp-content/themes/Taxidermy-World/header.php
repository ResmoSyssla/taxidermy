<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- bootstrap & css perso -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">

    <title><?php bloginfo('name');?></title>

    <!-- appelle les balises head dont wordpress a besoin (visible dans le code source de la page) -->
    <?php wp_head();?>
</head>

<body <?php body_class();?>>

    <!-- HEADER -->

    <div class="container-fluid">

        <div class="row titre-site">
            <?php dynamic_sidebar('titre-site');?> 
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav mr-auto">
                <?php wp_nav_menu(array('container_class' => 'menu-header', 'theme_location' => 'primary')); ?>
            </ul>
        </nav>

        <div class="row carousel">
        <?php dynamic_sidebar('carrousel');?> 
        </div>
        
    </div>


    <!-- CONTENU -->

    <div class="container">
        <section>
