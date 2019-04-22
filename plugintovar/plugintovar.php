<?php
/*
Plugin Name: plugintovar
Plugin URI: https://github.com/keqpup232/mydevichnik/tree/master/plugintovar
Description: товары на сайт
Version: Номер версии плагина, например: 1.0
Author: Иван Гаврюшин
Author URI: https://vk.com/keqpup232
*/

add_action( 'admin_menu', 'register_my_custom_menu_page' );
function register_my_custom_menu_page(){
	add_menu_page( 
		'custom menu title', 'custom menu', 'manage_options', 'plugintovar/tovaradmin.php', '', plugins_url( 'plugintovar/icons8-home-24.png' ), 6 
	);
}

?>