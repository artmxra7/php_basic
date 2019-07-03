<?php

class this{

 function hello(){

 }

 function hello2(){

 }

}

$myclass = get_class_methods('this');
foreach ($myclass as $class) {
  echo $class . "<br>";
}

?>