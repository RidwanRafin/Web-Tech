<?php

$std = ["id"=>1, "name"=>"Rafin", "email"=>"rafin@aiub.edu"]; 
$elementToSearch = "Rafin";

$found = false;

foreach($std as $s) {

    if($s == $elementToSearch) {

        $found = true;

        break;

    }

    }

    if ($found) {

     echo "true";

    } else {

     echo "false";

    }  

?>