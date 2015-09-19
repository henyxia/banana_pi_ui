<?php
exec("cat /proc/uptime | cut -d ' ' -f1", $output);
$up = floatval($output[0]);
echo "[$up]";
