<?php
$amt = $_POST['amt'] ;
$int = $_POST['int'] ;
$repay = $_POST['repay'] ;

$ti = $amt * ($int/100) * $repay;
$tp = $ti + $amt;
$mp = $tp/ ($repay*12);

    if(isset($_POST['submit'])){
        echo "Total interest : RM ", $ti , '<br>';
        echo "Total Payment : RM ", $tp ,'<br>';
        echo "Monthly Payment : RM  " , $mp ,'<br>';

        if($mp > 1500){
            echo '<body style="background-color:red">';
        }
    }