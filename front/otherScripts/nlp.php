<?php 

$command = escapeshellcmd('processQuery.py');
$output = shell_exec($command);
echo "NUJINIUNUI";
$mystring = system('sudo /usr/bin/python /var/www/html/scripts/processQuery.py "Who is albert einstein"', $retval);
echo $output;
echo $mystring;
echo $retval;

?>