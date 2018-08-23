<?php
$string = file_get_contents("posts.json");
$jsonRS = json_decode ($string,true);
foreach ($jsonRS as $rs) {
  print_r($jsonRS);
}
?>