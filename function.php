<?php 
        $title = "Functions";
        include 'Includes/header.php' 
    ?>

    <h1><?php echo $title ?></h1>

    <?php
        function writeMessage(){
            echo "I am enjoying this so far <br/>";
        }

        writeMessage();
        echo "<hr/>";
        writeMessage();

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "Sum of $num1 and $num2 is $sum <br/>";
        }

        function changeNum(&$num){
            $num = $num + 10;
        }

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;
        }

        $num = 987;
        addFunction(10, 20);
        addFunction(10, $num);
        addFunction('10', "20");

        changeNum($num);
        echo $num . '<br/>';

        $return_value = returnProduct(10, 200);
        echo $return_value . '<br/>'
    ?>
    
</body>
</html>