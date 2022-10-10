<?php 
     $title = 'Functions'; 
     include 'includes/header.php'?>
    <h1>Function</h1>
    
    <?php
    /*Defining a Function */

    function writemessage(){
        echo" You are really nice person <br/>";

    }
    // Calling A Function

    writemessage();

    echo "<hr/>";

    writemessage();

    // Functions with Parameters
    
    function addfunction($num1,$num2){
        $sum = $num1 + $num2;
        $num2 =$num2 +1;
        echo "The Sum of  $num1 and $num2 is :$sum <br/>";

    }
    // Pass by reference - use  ampersand in parameter   
    function changeNum(&$num){
        $num = $num +10;

    }

    function returnProduct($num1,$num2){
        $prod = $num1 * $num2;
        return $prod;


    }




    $num = 500;
    addfunction(10,20);
    addfunction(10,$num);
    addfunction('10',"50");
    


    
    changeNum($num);
    echo $num . '<br/>';

     
    $return_value =     returnProduct(10,200);
    echo $return_value. '<br/>';



    
    
    ?>
    
    <?php require 'includes/footer.php'?>