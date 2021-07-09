<?php

header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
//header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

$noCrapi = 'No CR.API for you. ';

print_r($uri); echo "<br><hr>";


//HOW MANY

$upperLimit = 42;
$howMany = $uri[1];
if (!is_numeric($howMany)) {
	echo $noCrapi . 'Bad CR.API request number.';
    exit();
}
if (($howMany < 1) || ($howMany > 42))  {
	echo $noCrapi . 'CR.API request limit exceeded.';
    exit();
}


// OUTPUT CRAP
for ($i = 1; $i <= $howMany; $i++) {
	echo $i . "<br>\r\n";

}


?>