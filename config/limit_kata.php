<?php  
function limit_kata($string){
	$word_limit = 15;
	$kata = explode(" ", $string);
	return implode(" ", array_splice($kata, 0, $word_limit));
}

?>