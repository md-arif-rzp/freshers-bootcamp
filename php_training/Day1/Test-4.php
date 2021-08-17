<?php
$json="{\"players\":[{\"name\":\"Ganguly\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dravid\",\"age\":45,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Dhoni\",\"age\":37,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Virat\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}},{\"name\":\"Jadeja\",\"age\":35,\"address\":{\"city\":\"Hyderabad\"}}]}";
$obj=json_decode($json);
//echo json_encode($obj);

//array of Names
$name=array();
foreach($obj->{'players'} as $value){
    //print_r ($value->{'name'});
    array_push($name,$value->{'name'});
}
echo "Name: " . json_encode($name);

//array of Age
$age=array();
foreach($obj->{'players'} as $value){
   
    array_push($age,$value->{'age'});
}
echo "Age: " . json_encode($age);

//array of Names
$city=array();
foreach($obj->{'players'} as $value){
     //print_r ($value->{'address'}->{'city'});
    array_push($city,$value->{'address'}->{'city'});
}
echo "City: " . json_encode($city);



?>