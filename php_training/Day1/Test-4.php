<?php
$json="{\"players\":[{\"name\":\"Ganguly\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dravid\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dhoni\",\"age\":37,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Virat\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}}]}";
$obj=json_decode($json);
//echo json_encode($obj);


//array of Names
$name=array();
//array of Age
$age=array();
//array of Cities
$city=array();


foreach($obj->{'players'} as $player){
        array_push($name,$player->name);
        array_push($age,$player->age);
        array_push($city,$player->address->city);

}

echo "Names: " . json_encode($name);
echo "Age: " . json_encode($age);
echo "City: " . json_encode($city);

 // print only unique names
 $unique_names = array_unique($name);
 echo "Names: " . json_encode($unique_names);

 //max age 
 $maxAge = 0;
    $maxAgePlayers = [];
    foreach ($obj->{'players'} as $player) {
        $maxAge = max($maxAge, $player->age);
    }
    foreach ($obj->{'players'} as $player) {
        if ($player->age == $maxAge) {
            array_push($maxAgePlayers, $player->name);
        }
    }

echo "Names: " . json_encode($maxAgePlayers);


?>