<?php

function get_info_object1($info, $flag = true)
{
    echo '<pre>';
    var_dump($info);
    if ($flag)
    {
        die;
    }
}