<?php

//Add my new menu to the Admin Control Panel

add_action('admin_menu', 'jmfp_Add_My_Admin_Link');


function jmfp_Add_My_Admin_Link()
{
    add_menu_page(
        'Mi primera página',
        'Mi primer plugin',
        'manage_options',
        plugin_dir_path(__FILE__) . 'jmfp-first-acp-page.php',
    );
}
