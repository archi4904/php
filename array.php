<?php
$a=array(2,2);
$b=array(8,10);
$t=array();

for($i=0;$i<count($a);$i++)
{
    $t[$i]=$a[$i]*$b[$i];
    echo $t[$i];
    echo"<br>";
}
?>