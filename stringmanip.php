<?php 
        $title = "String Manipulation";
        include 'Includes/header.php' 
    ?>

        <h1><?php echo $title ?></h1>
        <?php
        $phrase1 = "Student who came late ";
        $phrase2 = "Sit at back of the class";
        $name = "dwayne richards";
        echo $phrase1 . ", named NO Name, ". $phrase2;
        echo '<br/>';
        echo '<hr/>';
        

        //String Manipulation
        echo 'Uppercase first letter: ' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' . ucfirst($name).'<br/>';
        echo 'Upper case: '. strtoupper($name);'<br/>';
        echo 'Lower case: '. strtolower("THIS WAS ALL UPER CASE");'<br/>';
        echo '<hr/>';
        echo 'Repeat String: ' . str_repeat('a',10) . '<br/>';
        echo 'Repeat String - Nested Function: ' . strtoupper(str_repeat('a',10)) . '<br/>';
        echo 'Get Substring: ' . substr($name, 3, 10).'<br/>';
        //Return NULL
        //echo 'Get position of string: ' . strpos($combine,'Z').'<br/>';
        echo 'Find Character "R": ' . strchr($name,'R').'<br/>';
        echo 'Find Character "w": ' . strchr($name,'w').'<br/>';
        echo 'Find Character "a": ' . strchr($name,'a').'<br/>';
        echo 'Find Character "s": ' . strchr($name,'s').'<br/>';

        echo 'Find Lenght of String: ' . strlen($name).'<br/>';

        echo 'Without Trim: ' . "A" . "B C D" . "E" . '<br/>';
        echo 'Trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces on both left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
        echo 'Trim spaces on both right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';
        
  
        echo 'Replace string with another: ' . str_replace("climb", "sit", $phrase2 ) .'<br/>';


    ?>

    
<?php require 'Includes/footer.php' ?>