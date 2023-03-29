<?php
$mhs = array(
    array("ardika","22020205","denpasar"),
    array("susanti","3215678","panjer"),
    array("wahyu","2345178639","manado"),
    array("fizi","2201010354","jakarta"),
);

foreach($mhs as $idx => $dta){
    echo "data ke-".$idx."<br>";
    foreach($dta as $nval){

    echo $nval."<br>";
        
    }
}