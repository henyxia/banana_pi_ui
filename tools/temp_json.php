<?php
error_reporting(0);
exec("sensors -u | grep temp1_input | cut -d ' ' -f4", $output);
$temp = number_format(floatval($output[0]), 1);
echo "[$temp]";

