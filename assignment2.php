<?php

$tuition = 15000; // input the tuition fee

$commission = 0;

// calculate commission based on tuition fee
$commission = ($tuition > 20000) ? ($tuition * 0.25) :
              (($tuition > 10000) ? ($tuition * 0.2) :
              (($tuition > 7000) ? ($tuition * 0.15) : 0));

// output the calculated commission
if ($commission > 0) {
  echo "The commission is $" . $commission;
} else {
  echo "Invalid data";
}


?>