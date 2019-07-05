<?php


class Cars
{
  var $whells = 4;
}

class Truck extends Cars
{

}

$fuso = new Truck();

echo $fuso->whells;


?>
