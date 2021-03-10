
    


<?php

$name = "Moriyom";
$gender;
$age = 36;


if( $name == 'Moriyom' || $name == 'Rokeya' || $name == 'Korimon' ){

$gender = "Apu";

}else{

$gender = "Vai";

}

if( $age >= 20 && $age <=35){
    echo "<span style= 'color:red';>$name $gender You are eligible to Join Here</span>";     

}
else {
    echo "<span style= 'color:red';> You dont have the permission to join here</span>";
}

?>

