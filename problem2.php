<?php
// Complete the staircase function below.
function staircase($n) {
for($i=1; $i<=$n; $i++){
    for($j=$i; $j<=$n; $j++){
        echo " ";
    }
        for($j=1; $j<=$i; $j++){
            echo "#";
        }
        echo"\n";
    
    
}

}
?>
