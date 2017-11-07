<?php

$cadena = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas faucibus ornare diam, et dignissim odio facilisis vitae. Curabitur egestas feugiat nisi id vehicula. Nulla sed ex nec velit vestibulum pharetra vel ut magna. Nullam egestas, massa vitae rutrum dictum, dui ex dignissim purus, vitae ullamcorper dui est id ex. Integer facilisis, neque facilisis vehicula ornare, magna nulla accumsan elit, sed lacinia nisi orci quis dolor. In vitae neque fringilla, convallis tellus vitae, euismod dolor. Nunc ut sem volutpat, lobortis tortor in, ullamcorper libero. Sed aliquam neque sit amet pharetra facilisis.";

echo substr($cadena, 0, strlen($cadena) - 1) . "</br>" . "</br>";

$hola = "Hola Mundo!";

echo "</br>" . $hola;
echo "</br>" . str_replace("Hola", "Chau", $hola);
