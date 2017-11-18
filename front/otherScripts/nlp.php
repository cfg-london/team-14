<?php 

$command = escapeshellcmd('/usr/bin/python /var/www/html/scripts/processQuery.py "Who is AQlbert inteS"');
$output =  exec($command,$array);
$mystring = system('/usr/bin/python /var/www/html/scripts/processQuery.py "Who is AQlbert inteS"',$retval1);
echo $output
?>