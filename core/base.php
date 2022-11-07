<?php

function conn(){
    return mysqli_connect("localhost","root","","social_media");
}

$url = "http://$_SERVER[HTTP_HOST]/webdev/php_practical_proj/";