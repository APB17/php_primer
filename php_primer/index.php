<?php 
     $title = 'Index';
     include 'includes/header.php'
     ?>
    <!-- Basic HTML -->
    <h1>Hello World - PHP Primer</h1>

    <?php 
        //Printing to HTML using echo
        echo 'Hello PHP';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';

      ?>
    
    <?php 
    // declare variable
        $name = 'Aman Bara';
        $age = 22;
        //echo variabe
        echo $name;
        echo '<h1>My Name is:'.$name.' </h1>';
        echo '<h1>My Age is:'.$age.' </h1>';
     // echo using double quotes and interpolation
        echo "<h1> My Name is: $name </h1>";
    
    
    ?>
    <button type="button" class="btn btn-dark">Click me</button>

    <?php require 'includes/footer.php'?>