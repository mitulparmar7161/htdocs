<?php
$num=5;


for($i=1;$i<=$num;$i++){
    for($k=1;$k<=$i;$k++){
        echo "&nbsp&nbsp";
    }
    for($j=0;$j<=$num-$i;$j++){
                echo "* ";    
                echo "&nbsp&nbsp";            
    }

    echo "<br>";  
}
?>