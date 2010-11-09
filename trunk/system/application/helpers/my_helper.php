<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('dump'))
{
    function dump($var)
    {
        echo "<pre>".print_r($var, true)."</pre>";
    }    
}

?>
