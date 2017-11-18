<?php 

$command = escapeshellcmd('python processQuery.py "Who is albert einsein"');
$output = shell_exec($command);
echo $output;

?>