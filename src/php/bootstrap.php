<?php
define('path', $_SERVER['DOCUMENT_ROOT']);
const path_php = path . '/src/php/';
const path_css = path . '/src/css/';
const path_js = path . '/src/js/';
const path_img = path . '/src/img/';


function dd(...$vars){
    foreach ($vars as $var){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
    }
}


?>