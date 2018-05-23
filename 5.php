<?php

$huruf = [
	[1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1],
	[1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1],
	[1, 0, 0, 1, 0, 1, 0, 0, 1, 0, 0, 1],
	[1, 0, 0, 1, 0, 1, 0, 1, 1, 1, 0, 1],
	[1, 0, 1, 0, 0, 1, 1, 0, 0, 0, 1, 1],
	[1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1],
];

foreach( $huruf as $key => $value ) {

	echo "<table>";

	foreach( $value as $key2 => $value2 ) {

		echo $huruf[$key][$key2] == 1 ? '<td width="30">DW</td>' : '<td width="30"></td>';
	
	}

	echo "</table>";

}