<?php

if(isset($_POST["name"]))
   
    $name = $_POST['name']; 


    if ($_POST['cvColor'] == "blue") {
        $bgColor = "#24527c";
        $textColor = "white";
    } else {
        $bgColor = "#b50604";
        $textColor = "white";
    }

  
    include 'cv.phtml';
} else {

    include 'formulaire.phtml';
}
?>