
<style>
    .orange {
        color: #C0C0C0;
        font-weight: 900;
        font-size: 30px;    }

        .gold {
        color: gold;
        font-weight: 900;
        font-size: 30px;    }

        .platinum {
        color: #E5E4E2;
        font-weight: 900;
        font-size: 30px;    }

        .kichupanni {
        color: red;
        font-weight: 900;
        font-size: 30px;    }

        .error {
        color: green;
        font-weight: 900;
        font-size: 30px;    }
</style>


<?php

$name = "Rohim";
$gender;
$level = 29;


if( $name == 'Moriyom' || $name == 'Rokeya' || $name == 'Korimon' ){

$gender = "Apu";

}else{

$gender = "Vai";

}



if( $level >= 30 && $level <=50){
    echo "$name $gender Congratulations! apni <span class='orange' ;> Silver </span> Button Peyechen";     

}
else if( $level >= 51 && $level <=80){
    echo "$name $gender Congratulations! apni <span class='gold' ;> gold </span> Button Peyechen";     

}
else if( $level >= 81 && $level <=100){
    echo "$name $gender Congratulations! apni <span class='platinum' ;> platinum </span> Button Peyechen";      

}

else if( $level >= 101){
    echo "<span class='error' ;> Error Occurred </span>";      

}

else {
    echo "$name $gender <span class='kichupanni' ;> Sorry! </span> apnar kono level pawa gai nai";
}




?>

