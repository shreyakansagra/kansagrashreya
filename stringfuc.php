<?php
$a=STRLEN("HELLO WORLD!");
echo $a;
echo "<br>";

$b=strpos("HELLO,WORLD!","WORLD");
echo $b;
echo "<br>";

$c=str_replace("world","universe","hello, world!");
echo $c;
echo "<br>";

$d=SUBSTR("hello, world!" ,0,5);
echo $d;
echo "<br>";

$e=STRTOLOWER("HELLO, WORLD!");
echo $e;
echo "<br>";

$f=STRTOUPPER("hello, world!");
echo $f;
echo "<br>";

$g=ucfirst("hello, world!");
echo $g;
echo "<br>";

$h=STRREV("hello, world!");
echo $h;
echo "<br>";

$i=trim("hello, world!");
echo $i;
echo "<br>";

?>