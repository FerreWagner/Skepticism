<?php 
/*
 * 存放自己的函数库
 * 
 */

function p($var)
{
    if (is_bool($var)){
        var_dump($var);
    }elseif (is_null($var)){
        var_dump(NULL);
    }else {
        print_r($var);
    }
}




?>