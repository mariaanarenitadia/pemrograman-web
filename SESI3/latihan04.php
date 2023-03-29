<?php

//model 1
$cars = array("volvo","BMW","toyota");
//model 2
$cars[0] = "volvo";
$cars[1] = "BMW";
$cars[2] = "toyota";
for($i=0;$i<3;$i++){
    echo "mobil ".$cars[1]."<br>";
}