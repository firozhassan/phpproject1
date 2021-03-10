<?php

$name = "Katrina";
$gender;
$marks = 50;


if( $name == 'Katrina' || $name == 'Dipika' || $name == 'Anushka' ){

$gender = "Apu";

}else{

$gender = "Vai";

}

if( $marks >= 0 && $marks <=32){
    echo "<span style= 'color:red';>$name $gender Sorry I have failed </span>";     

}else if( $marks >=33 && $marks <=40 ){
    echo "<span style= 'color:red';>$name $gender Congratulations! You have passed the exam without any Grade</span>";
}
else if( $marks >=40 && $marks <=49 ){
    echo "<span style= 'color:red';>$name $gender Congratulations! You have passed the Exam with C Grade </span>";
}
else if( $marks >=50 && $marks <=59 ){
    echo "<span style= 'color:red';>$name $gender Congratulations! You have passed the Exam with B Grade</span>";
}
else if( $marks >=60 && $marks <=69 ){
    echo "<span style= 'color:red';>$name $gender Congratulations! You have passed the Exam with B+ Grade</span>";
}
else if( $marks >=70 && $marks <=79 ){
    echo "<span style= 'color:red';>$name $gender Congratulations! You have passed the Exam with A- Grade</span>";
}
else if( $marks >=80 && $marks <=89 ){
    echo "<span style= 'color:red';>$name $gender Congratulations! You have passed the Exam with A Grade</span>";
}
else if( $marks >=90 && $marks <=100 ){
    echo "<span style= 'color:red';>$name $gender Congratulations! You have passed the Exam with A+ Grade</span>";
}
else {
    echo "<span style= 'color:red';> Sorry we have got nothing</span>";
}

?>