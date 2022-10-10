<?php  
    $title = 'While and do while statement'; 
    include 'includes/header.php'?>
    <h1>While Loop </h1>
    <?php
        $grade=0;
        // Infinite Loop
        //while($grade <10){
        //    echo '<p> I am less than 10</p>';}

        // PRE CONDITION LOOP
        while($grade <10){
            echo '<p> I am less than 10</p>';
            $grade++;

        }
        echo 'exit loop';
        
    ?>
    <h1>Do-While Loop </h1>
    <?php
    // POST CONDITION LOOP
        $grade = 0;
        do{
            echo'<p> I AM DO WHILE LOOP</p>';
            $grade++;
        }
        while($grade < 10);
        echo 'Exit LOOP!';    
    
    
    
    ?>

    
<?php require 'includes/footer.php'?>