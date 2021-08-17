<?php

//helper function to append array to result
function helper($array){

    foreach($array as $key=>$value){
        $GLOBALS['result']=array_merge($GLOBALS['result'],array($key=>$value));

    }

}
//function to flatten multiarray
function flatten_multiarray($array){

    foreach($array as $key=>$value){
        if(is_array($value)){
            helper($value);
        } else {
            $GLOBALS['result']=array_merge($GLOBALS['result'],array($key=>$value));
        }

    }
}


$sample_array = [2, 3, [4,5,6,7,8], [6,7], 8];
$result=array();
flatten_multiarray($sample_array);
print_r($result);

?>
