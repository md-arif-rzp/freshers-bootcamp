<?php

// recursive function to merge multidimensional array
function array_flatten($array){ 
    if (!is_array($array)) { 
      return false; 
    } 
    $response = array(); 

    foreach ($array as $key => $value) { 
      if (is_array($value)) { 
        $response = array_merge($response, array_flatten($value)); 
      } 
      else { 
        $response = array_merge($response, array($key => $value));
      } 
    } 
    return $response; 
}

$sample_array = [2, 3, [4,5,6,7,8], [6,7], 8];
echo json_encode(array_flatten($sample_array));

?>
