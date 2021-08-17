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


foreach($obj->{'players'} as $value){
        array_push($name,$value->{'name'});
        array_push($age,$value->{'age'});
        array_push($city,$value->{'address'}->{'city'});

}


echo "Name: " . json_encode($name);
echo "Age: " . json_encode($age);
echo "City: " . json_encode($city);



?>