<?php

function Debug($obj){
    echo("<pre>");
    print_r($obj);
    echo("</pre>");
    die();
}