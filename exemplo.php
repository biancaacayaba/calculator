<?php
/**
 * Plugin Name: calcula cay
 * Description: plugin de calculadora
 * Version: 1.0
 * Author: Bianca Acayaba
 * Author URI: http://biancaacayaba.com.br
 */
// principal função usada no plugin
function fexemplo($atts){
   return '<iframe src="'.plugins_url().'/exemplo/index.php" frameborder="0"> </iframe>';
}
add_shortcode('calculadora', 'fexemplo');
?>