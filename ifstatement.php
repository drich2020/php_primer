<?php 
        $title = "IF Statement";
        include 'Includes/header.php' 
    ?>

    <h1><?php echo $title ?></h1>
    <?php

        //An if statement that will carry out an action based on the value of the variable.

        echo '<h2>If Statement</h2>';

        $grade = 50;

        if($grade >= 50){
            echo '<h3 style="color: green"> YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red"> YOU HAVE FAILED</h3>';
        }
        $grade = 'A';
        // If-Else if-else
        if($grade == 'A'){
            echo '<h2> YOU ARE A SUPERSTAR</h2>';
        }
        elseif($grade == 'B'){
            echo '<h2> YOU DID WELL</h2>';
        }
        else{
            echo '<h2> YOU HAVE FAILED</h2>';
        }



    ?>
    
</body>
</html>