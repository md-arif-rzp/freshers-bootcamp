<?php

$phone_number = "2345678901";
$masking_symbol="*";
$start_pos=2;
$end_pos=8; 

echo mask_phone_number($phone_number,$masking_symbol,$start_pos,$end_pos);

// function to mask a given phone number
function mask_phone_number($phone_number,$masking_symbol,$start_pos,$end_pos){
    $masked_num="";
        for($i=0;$i<strlen($phone_number);$i++)
        {
            if($i>=$start_pos && $i<=$end_pos){
                $masked_num.=$masking_symbol;
        }
        else{
                $masked_num.=$phone_number[$i];
        }
    }
    return $masked_num;
}
?>