<?php

function sanitize($var, $type) {
	switch ( $type ) {

	    case 'int':
			$var = (int) $var;
			break;
	
	    case 'str':
	    	$var = trim($var);
	    	break;
	    
	    case 'nohtml':
	    	$var = htmlentities(trim($var), ENT_QUOTES);
			break;
		
	    case 'plain':
	    	$var = htmlentities(trim($var), ENT_NOQUOTES);
	    	break;
	    	
	    case 'upper_word':
	    	$var = ucwords(strtolower(trim($var)));
	    	break;
	
	    case 'ucfirst':
	    	$var = ucfirst(strtolower(trim($var)));	
			break;
			
	    case 'lower':
	    	$var = strtolower(trim($var));
			break;
			
	    case 'urle':
	    	$var = urlencode(trim($var));
			break;
	
		case 'trim_urle':
			$var = urldecode(trim($var));
			break;
	
		case 'sql':
			$var = mysql_real_escape_string($var);
			break;
	}
	return $var;
}
