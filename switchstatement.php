<?php 
        $title = "Switch Statement";
        include 'Includes/header.php' 
    ?>

    <h1><?php echo $title ?></h1>
    <?php
        $grade = 'A';

        switch($grade){
            case 'A':
                echo '<h2 style="color: green"> YOU ARE A SUPERSTAR!!!</h2>';
                break;
            case 'B':
                echo '<h2 style="color: yellow"> YOU DID WELL!</h2>';
                break;
            default:
                echo '<h2 style="color: red"> YOU HAVE FAILED...</h2>';
                break;

        }



    ?>
<?php require 'Includes/footer.php' ?>