<!-- WAP to see if element in 2d array -->
<!-- Take input X from the user which is to be seaarch if found print index-->

<?php
$arr1=[[1,2,3],[4,5,6],[7,8,9]];
$k=(int)readline("Enter a number :");
for($i=0;$i<count($arr1);$i++){
    for($j=0;$j<count($arr1[$i]);$j++){
        if($k==$arr1[$i][$j]){
            echo "Element found at $i $j";
        }
    }
}
?>