<?php
if(!function_exists('array_copy')){
  /**
	 * array_copy
	 * This function deep copies an array
	 * @param <mixed[]> $array The array to be copied
	 * @return <mixed> Returns an array, is an array is passed, or the passed value if that value is not an array.
	 */
	function array_copy($array){
		$clone = array();
		if(is_array($array)){
			foreach($array as $key => $value){
				$clone[$key] = (is_array($value))
					? array_copy($value)
					: (is_object($value)
						? clone $value
						: $value );
			}
		} else {
			return (is_object($array)? clone $array: $array);
		}
		return $clone;
	}
}
