<?php
exec("mpstat -P ALL | tail -2 | cut -d ' ' -f43", $output);
$cpu1 = number_format(100 - floatval($output[0]), 2);
$cpu2 = number_format(100 - floatval($output[1]), 2);
echo "[$cpu1;$cpu2]";

