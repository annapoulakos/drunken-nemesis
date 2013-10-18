<?php
if(!function_exists('array_map_reduce')){
  /**
   * array_map_reduce
   * @param <mixed[]> $array The array to use the map/reduce functions on
   * @param <Closure> $map_function The map function to iterate the array through before reducing
   * @param <Closure> $reduce_function The reduce function to iterate the array through
   * @return <mixed> Returns the appropriately map-reduced value.
   */
  function array_map_reduce($array, $map_function, $reduce_function){
    return array_reduce(
      array_map($array, $map_function)
      , $reduce_function
      );
  }
}
