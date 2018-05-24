<?php

$data = fopen("demo1.txt", "w") or die("Unable to open file!");

$txt = "Hello World\n";

fwrite($data, $txt);

$txt = "Some Content\n";

fwrite($data, $txt);

fclose($data);

echo "File Created";

?>