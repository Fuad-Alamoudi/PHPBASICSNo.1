<?php
$name = "Fuad";//In Global Scope
 
function G_Func() {
  $name = "Alamoudi";//In Function Scope
  echo "Function Local Name Is :" . $name . "<br>";
  echo "Global Name Is" . $GLOBALS['name'];
}
 
G_Func();

?>