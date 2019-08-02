<?php

    add_action('widgets_init', 'taxidermyworld_init_sidebar'); // "hook" : donne la possibilité de créer des emplacements pour les widget (il faut ensuite créer les emplacements pour pouvoir ajouter des widgets)
    add_action('init','taxidermyworld_init_menu'); //rend le menu interactif, permettra de gérer les emplacements des menus

    function taxidermyworld_init_sidebar()
    {
        // on crée les emplacements widgets
        register_sidebar ( array (
            'name'=> __('titre site', 'taxidermyworld'),
            'id'=> 'titre-site',
            'description' => __('Titre du site, logo', 'taxidermyworld'),
        ));

        register_sidebar ( array (
            'name'=> __('carrousel', 'taxidermyworld'),
            'id'=> 'carrousel',
            'description' => __('Carrousel', 'taxidermyworld'),
        ));

        
    }


    function taxidermyworld_init_menu()
    {
        register_nav_menu('primary', __('primarymenu','taxidermyworld'));
    }

?>

