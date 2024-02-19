<?php 
    /**
     * php/menus/menu-header-primary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2024.02.08)
     * @copyright 2024 (2024.02.08)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-3',
            'menu_id' => 'Header-Primary'
        )
    );
?>