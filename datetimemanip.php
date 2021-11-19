<?php 
        $title = "Date and Time Manipulation";
        include 'Includes/header.php' 
    ?>

    <h1><?php echo $title ?></h1>

    <?php
        $datenow = getdate();
        echo "The date is now: <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . "<br/>";
        echo $datenow['year'] . "<br/>";

        echo "The date is now: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year']. '<br/>';

        echo time() . '<br/>';

        print date("m/d/y 6.i:s<br>", time()) . '<br/>';
        print "The date is now";
        print date("j of F Y, \a\\t g.i a", time());
    ?>
    
    <?php require 'Includes/footer.php' ?>