<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Enter a:<input type="number" name="a">
    Enter b:<input type="number" name="b">
    Enter c:<input type="number" name="c">
    <input type="submit" value="Enter">
</form>
</body>
</html>
<?php
include ("quadratic equation 2.php");
if($_SERVER["REQUEST_METHOD"]="post"){
    $a=$_REQUEST["a"];
    $b=$_REQUEST["b"];
    $c=$_REQUEST["c"];

    $pt = new QuadraticEquation($a,$b,$c);
}
if($pt->getDiscriminant()>0){
    echo "phương trình có hai nghiêm :". $pt->getRoot1()."và".$pt->getRoot2();
}
else if($pt->getDiscriminant()==0){
    echo "phương trình có nghiệm:" . $pt->getRoot1();
}
else{
    echo $pt->getDisplay();
}