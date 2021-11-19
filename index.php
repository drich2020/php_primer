    <?php 
        $title = "Index";
        include 'Includes/header.php' 
    ?>
    <!-- Basic HTML -->
    <h1>Hello HTML - Primer</h1>
    <br/>
    <?php 
        //Printing to HTML using echo
        echo 'Hello PHP';
        echo '<br/>';
        echo 'Second Line'; 
        echo '<br/>';  
    
        //Declare variable. Variales need a '$'. They are not strongly typed
        $name = 'Dwayne Richards';
        $age = 23;
        //Echo variable - Concatination method
        echo $name;
        echo '<h1>My Name Is: '.$name.' </h1>';
        echo '<h1>My Age Is: '.$age.' </h1>';


        echo "<h1>My Age Is: $age </h1>";
    ?>
    <button type="button" class="btn btn-dark">Click me!</button>
    <button type="button" class="btn btn-dark">Click me!</button>
    <button type="button" class="btn btn-dark">Click me!</button>


    <?php require 'Includes/footer.php' ?>


