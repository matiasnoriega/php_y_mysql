<?php

$XMLeval = "<?xml version='1.0' encoding='UTF-8'?>
<nitf>
  <head>
    <title>Colombia Earthquake</title>
  </head>
  <body>
    <headline>
      <hl1>143 Dead in Colombia Earthquake</hl1>
    </headline>
    <byline>
      <bytag>By Jared Kotler, Associated Press Writer</bytag>
    </byline>
    <dateline>
      <location>Bogota, Colombia</location>
      <date>Monday January 25 1999 7:28 ET</date>
    </dateline>
  </body>
</nitf>";

$xml = simplexml_load_string($XMLeval) or die("Error: Cannot create object");
/*
print_r($xml);
var_dump($xml);
*/
echo $xml->body->headline->hl1;
