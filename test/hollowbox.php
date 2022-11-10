<?php

$num=5;

for($i=0;$i<=$num;$i++){

    for($j=0;$j<=$num;$j++){
        if($i== 0 or $j==0 or $i==$num or $j==$num){

            echo "* ";

        }
        else{
            echo "&nbsp&nbsp&nbsp";
        }
    }
    echo "<br>";
}


?>