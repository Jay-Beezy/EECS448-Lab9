<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<table>", createMultiTable(), "</table>";

function createMultiTable(){
         for($i = 1; $i <= 100; $i++){
                echo "<tr>", createRow($i), "</tr>";
         }
}

function createRow($i){
         for($j = 1; $j <= 100; $j++){
                $k = $i*$j;
                echo "<td>" . $k . "</td>";
         }
}
?>