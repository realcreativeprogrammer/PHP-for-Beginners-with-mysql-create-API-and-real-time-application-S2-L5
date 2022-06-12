<?php
$mystring="php";
echo gettype($mystring);
echo '<br>';
echo $mystring;
echo '<br>';

echo 'i love '.$mystring.' .';

echo "<br> I love $mystring";
echo '<br>';

$cars=array('bmw','valvo','toyota');
echo gettype($cars);
var_dump($cars);
echo '<br>';
echo $cars[2];
echo '<br> ----------';
$myarray=array('ahmaed'=>'14','muhamed'=>'34');
var_dump($myarray);
echo $myarray['ahmaed'];
echo '<br> ----------';
$mld=array(
    array('valvo','2015','120KM'),
    array('bmw','2016','140KM')

);
var_dump($mld);

echo '<br> ----------';

echo( $mld[0][2]);
?>