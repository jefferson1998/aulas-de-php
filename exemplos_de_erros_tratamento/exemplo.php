<?php

	error_reporting(E_ERROR);

	ini_set("display_errors", 1);


	echo "Antes do Notice";

	if($i == 1) {
		echo "string";
	}

	echo "</br>";

	echo "Antes do E_ERROR";

	$str = new bbmClass;

	echo "Antes do Warning";

	$strArray = explode("Hello World");

	echo "</br>";
	
	echo "Depois do Warning";


	
