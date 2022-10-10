<?php  
    $title = 'String Manipulation'; 
    include 'includes/header.php'?>
    <h1>PHP String Manipulation</h1>
    <?php
    // Concatenation of Strings
         $phrase1="student who came late" ;
         $phrase2="in class, stand with rock ";
         $name ="aman bara";
        echo $phrase1 ." , named Angel,  ".$phrase2;
        echo '<br/>';
        echo '<hr/>';
        
        // String Transformation
        echo 'Uppercase first letter:'.ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word:'.ucwords($name).'<br/>';
        echo 'Upper case :'.strtoupper($name).'<br/>';
        echo 'Lower case:'.strtolower("THIS WAS ALL UPPER CASE").'<br/>';
        echo '<hr/>';
        echo 'Repeat String:'.str_repeat('a',10).'<br/>';
        echo 'Repeat String- Nested Function:'. strtoupper(str_repeat('a',10)).'<br/>';
        echo 'Get a SUBSTRING:'.substr($name,3,5).'<br/>';
        echo 'Get position of String:'.strpos($name,'w').'<br/>';
        // Returns Null
        echo 'FIND CHARACTER "R": ' .strchr($name,'R').'<br/>';
        echo 'FIND CHARACTER "r": ' .strchr($name,'r').'<br/>';
        echo 'FIND CHARACTER "s": ' .strchr($name,'s').'<br/>'; 
        echo 'FIND CHARACTER "e": ' .strchr($name,'e').'<br/ >';   
        
        echo'FIND LENGTH OF STRING:' .strlen($name).'<br/>';
        echo'Trim spaces on both side:'. "A".trim(" B C D")."E" . '<br/>';
        echo'Trim spaces TO THE LEFT:'. "A".ltrim(" B C D")."E" .'<br/>';
        echo'Trim spaces TO THE RIGHT:'. "A".rtrim(" B C D")."E" . '<br/>';
        
        echo 'Replace String with another:'.str_replace("stand","sit",$phrase2).'<br/>';

    
    ?>
    
    <?php require 'includes/footer.php'?>