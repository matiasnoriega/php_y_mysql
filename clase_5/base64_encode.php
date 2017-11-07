<?php

$cadena = "123456";

$encode = base64_encode($cadena);

echo "Encoded: " . $encode . "</br>";

$decode = base64_decode($encode);

echo "Decoded: " . $decode . "</br>";