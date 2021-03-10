
    


<?php

$name = "মরিয়ম";
$gender;
$marks = 110;


if( $name == 'মরিয়ম' || $name == 'রোকেয়া' || $name == 'করিমন' ){

$gender = "আপু";

}else{

$gender = "ভাই";

}

if( $marks >= 0 && $marks <=32){
    echo "<span style= 'color:red';>$name $gender আপনি আপনি ফেইল করছেন</span>";     

}else if( $marks >=33 && $marks <=40 ){
    echo "<span style= 'color:red';>$name $gender আপনি টাইনা টুইনা পাশ করছেন</span>";
}
else if( $marks >=40 && $marks <=49 ){
    echo "<span style= 'color:red';>$name $gender আপনি ছি পেয়েছেন</span>";
}
else if( $marks >=50 && $marks <=59 ){
    echo "<span style= 'color:red';>$name $gender আপনি বি পেয়েছেন</span>";
}
else if( $marks >=60 && $marks <=69 ){
    echo "<span style= 'color:red';>$name $gender আপনি বি+ পেয়েছেন</span>";
}
else if( $marks >=70 && $marks <=79 ){
    echo "<span style= 'color:red';>$name $gender আপনি এ- পেয়েছেন</span>";
}
else if( $marks >=80 && $marks <=89 ){
    echo "<span style= 'color:red';>$name $gender আপনি এ পেয়েছেন</span>";
}
else if( $marks >=90 && $marks <=100 ){
    echo "<span style= 'color:red';>$name $gender আপনি এ+ পেয়েছেন</span>";
}
else {
    echo "<span style= 'color:red';> দুঃখিত কিছু পাওয়া যাই নাই</span>";
}

?>

