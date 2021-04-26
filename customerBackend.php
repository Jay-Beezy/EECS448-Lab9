<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

        $username = $_POST["userName"];
        $password = $_POST["userPassword"];

        echo "Welcome, ", $username, "<br/>";
        echo "Your password is: ", $password, "<br/>";

        $lotramounts = $_POST["lotr"];
        $lotrCosts = $lotramounts*25;

        $tsamounts = $_POST["theshining"];
        $tsCosts = $tsamounts*10;

        $itwamounts = $_POST["intothewild"];
        $itwCosts = $itwamounts*5;

        $shipCosts = $_POST["shippingOption"];

        $total = $lotrCosts + $tsCosts + $itwCosts + $shipCosts;

        echo "<br/><br/>";
        echo "Your reciept:<br/";
        echo "<br/>";
        echo "You ordered: " . $lotramounts ." copies of The Lord of the Rings, for a total of: $".$lotrCosts. "<br/>";
        echo "You ordered: " . $tsamounts ." copies of The Shining, for a total of: $". $tsCosts. "<br/>";
        echo "You ordered: " . $itwamounts ." copies of Into the Wild, for a total of: $". $itwCosts. "<br/>";
        echo "Your shipping costs: $". $shipCosts. "<br/>";
        echo "Your grand total is: $" . $total . "<br/";
?>
