<?php
echo preg_replace_callback('/(\d+)/', 'cube', 'a1b2c3');
function cube($cube)
{
    $Num = pow($cube[0], 3);
    return $Num;
}