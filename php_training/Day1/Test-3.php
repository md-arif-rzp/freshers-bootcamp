<?php


$sample_array = ["snake_case", "camel_case"];
echo json_encode(convertToCamelCase($sample_array));

// function to convert given array of strings to camelCase
function convertToCamelCase($sample_array){
    $Response=array();

    foreach($sample_array as $value){
        $curr = explode("_",$value);
        $newString ="";
        $newString.=$curr[0];
            for($counter=1;$counter<count($curr);$counter++){
                $newString.=ucwords($curr[$counter]);
            }
        array_push($Response,$newString);
    }
    return $Response;
}

?>