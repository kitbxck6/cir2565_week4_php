<?php
//4.Increment/Decrement
$x = 10;
$y = 10;

// echo "1.Postfig; ++x;".++$x. "<br>";//Postfig x; $x = $x + 1;//$x = 10 +1 //11
// echo "2.Postfig; ++y;".++$y. "<br>";//Postfig y; $x = $y + 1;//$y = 10 +1 //12

// echo "3.Postfig; ++x;".$x++. "<br>";//Postfig x; $x = $x;//$x = 11
// echo "4.Postfig; ++x;".$x++. "<br>";//Postfig x; $x = $x + 1;//$x = 12

// echo "5.Postfig; ++y;".$y++. "<br>";//Postfig y; $x = $y;//$y = 11
// echo "6.Postfig; ++y;".$y++. "<br>";//Postfig y; $x = $y + 1;//$y = 12

echo "7.Postfig; x--;".$x--. "<br>";//Postfig y; $x = $x - 1;//$x = 10 - 1 //10
echo "8.Postfig; x--;".$x--. "<br>";//Postfig y; $x = $x - 1;//$x = 10 - 1 //9

echo "9.Postfig; --y;".--$y. "<br>";//Postfig y; $x = $y - 1;//$x = 12 - 1 //11
echo "10.Postfig; --y;".--$y. "<br>";//Postfig y; $x = $y - 1;//$x = 12 - 1 //11
?>