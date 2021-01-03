<?php
 $cel = $_POST['degree'];
 $far = $_POST['far'] ;

    if (isset($_POST['chgCel'])) {
        $chg = ($cel * 9 / 5) + 32;
        echo "The value of ", $cel ," celcius in Farenheit is : " ;
        echo "Fahrenheit : " , $chg;
      }
    else
         if (isset($_POST['chgFar'])) {
            $chg = ($far - 32) *5/9;
            echo "The value of ", $cel ," Farenheit in celcius is : " ;
            echo "Celcius : " , $chg;
         }