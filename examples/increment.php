<?php

require('../src/tempodb.php');
date_default_timezone_set("America/Chicago");

$tdb = new TempoDB("your-api-key", "your-api-secret");

$series_key = "php-increment";

$data = array(
    new DataPoint(new DateTime("2012-07-04T14:00:00"), 1),
    new DataPoint(new DateTime("2012-07-04T14:01:00"), 4)
);

$result = $tdb->increment_key($series_key, $data);
var_dump($result);

?>
