<?php
//student result calculation
$marks=55;

switch($marks){
    case $marks<=100 && $marks>=80;
    echo "Your Grade is A+";
    break;

    case $marks<80 && $marks>=70;
    echo "Your Grade is A";
    break;

    case $marks<70 && $marks>=60;
    echo "Your Grade is B";
    break;

    case $marks<60 && $marks>=50;
    echo "Your Grade is C";
    break;

    case $marks<50 && $marks>=40;
    echo "Your Grade is D";
    break;

    case $marks<40 && $marks>=33;
    echo "Your Grade is E";
    break;

    case $marks<33 && $marks>=0;
    echo "Your Grade is F (you have marks less than 33)";
    break;

    default:
    echo "Enter Valid Marks";
    break;
}