<?php
$a=10;
$b=5;
echo"addition:".($a+$b)."<br>";
echo"substraction:".($a-$b)."<br>";
echo"multiplication:".($a*$b)."<br>";
//check division by zero
if($b!=0)
    {
        echo"division:".($a/$b);
    }
    else
        {
            echo"division is not possible";
        }
?>
