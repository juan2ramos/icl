<<<<<<< HEAD
<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
=======
    <?php
/**
 * Created by PhpStorm.
 * User: juan2ramos
 * Date: 28/04/14
 * Time: 15:38
 */

date_default_timezone_set("America/Bogota");
ini_set('display_errors', 1);

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);


try{

    $url = isset($_GET['url'])?$_GET['url']:'inicio';
    $fileName = ROOT . 'views' . DS . $url . '.php' ;

    if(is_readable($fileName)){
        $title = str_replace("-", " ", $url);
        require_once ROOT . 'layout' .DS . 'default.php';
    }else{
        throw new Exception("Error 404 pagina no existe: ". $_GET['url'] , 1);
    }
}
catch(Exception $e){
    echo $e->getMessage();
}
>>>>>>> 33575897f92692683272fe3a6d6cdf7c1b891a14
