<?php

function hello()
{
	echo "<center><b><h3>tes marlin booking</h3></b></center>";
    	echo "<center>";
    		
    	$input = 15;

    	foreach(range(1, $input) as $number) {
		  if ($number % 3 != 0 && $number % 5 != 0) {
		     '<br>';
		    continue;
		  }
		}
	  
	  if ($number % 3 == 0) echo 'Marlin';
	  if ($number % 5 == 0) echo ' Booking';
	  echo '<br>';
	  if ($number % 3 == 0 && $number % 5 == 0) echo 'Marlin Booking';
	  echo '<br>';
	  if ($input % 3 == 0 && $input % 5 == 0) {
	  	foreach(range(1, $input) as $number) {
		  if ($number % 3 != 0 && $number % 5 != 0) {
		     '<br>';
		    continue;
		  }
		}
		if ($number % 3 == 0) echo 'Booking';
	  	if ($number % 5 == 0) echo ' Marlin';
	  	echo '<br>';
	  	if ($number % 3 == 0 && $number % 5 == 0) echo 'Booking Marlin';
	  }
}
