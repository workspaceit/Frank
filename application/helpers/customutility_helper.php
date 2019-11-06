<?php
/**
 * @param string $str Original string
 * @param int $length Max length
 * @param string $append String that will be appended if the original string exceeds $length
 * @return string
 */
if ( ! function_exists('str_truncate_words'))
{
	function str_truncate_words($str, $length, $append = '..') {
		$str2 = preg_replace('/\\s\\s+/', ' ', $str); //remove extra whitespace
		//$words = explode(' ', $str2);
		if (($length > 0) && (strlen($str2) > $length)) {
			//return implode(' ', array_slice($words, 0, $length)) . $append;
			return substr($str,0,$length).$append;
		}else
			return $str;
	}
}

if ( ! function_exists('prd'))
{
	function prd($array) {
		echo '<pre>';
		print_r($array);
		echo '</pre>';
		
		die();
	}
}

if ( ! function_exists('dd'))
{
	function dd($array) {
		echo '<pre>';
		var_dump($array);
		echo '</pre>';

		die();
	}
}