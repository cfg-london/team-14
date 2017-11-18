<?php 

$command = escapeshellcmd('python nlp.py "Who is albert einsein"');
$output = shell_exec($command);
echo "HELLO";
echo $output;



?>