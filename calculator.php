<?php
/**
 * Plugin Name: calcula cay
 * Description: plugin de calculadora
 * Version: 1.0
 * Author: Bianca Acayaba
 * Author URI: http://biancaacayaba.com.br
 */
// principal função usada no plugin
function calcular($atts){
   return '<iframe src="'.plugins_url().'/calculator/index.php" frameborder="0" width="350px" height="450px"> </iframe>';
}
add_shortcode('calculadora', 'calcular');
?>