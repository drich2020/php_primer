<?php 
        $title = "Arrays and Printouts";
        include 'Includes/header.php' 
    ?>

    <h1><?php echo $title ?></h1>
    <?php
        //A variable
        $num = 3;

        // An Array
        $numbers = array(1,2,3,4,5,6,7,8,9,10,2,34,55,23,87,90,65,12,65);

        echo $numbers[5];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array numbers are: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }

    ?>
<?php require 'Includes/footer.php' ?>