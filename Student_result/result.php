
<!-- Student_result/result.php -->
    <!-- task 2 -->
<?php
function calculateResult($math,$science,$arabic,$english,$islamic){
    
    $total_marks = $math + $science + $arabic + $english + $islamic;
    $subject_count = 5;
    $average_marks = $total_marks / $subject_count;

    if($math < 33 || $science < 33 || $arabic < 33 || $english < 33 || $islamic < 33){
    return[
        'total_marks' => $total_marks,
        'average_marks' => $average_marks,
        'grade' => 'failed(You have marks less than 33 in one or more subjects)'
    ];
    }

    switch (true) {
    case ($average_marks <= 100 && $average_marks >= 80):
            $grade = "A+";
            break;
    case ($average_marks < 80 && $average_marks >= 70):
            $grade = "A";
            break;
    case ($average_marks < 70 && $average_marks >= 60):
            $grade = "A-";
            break;
    case ($average_marks < 60 && $average_marks >= 50):
            $grade = "B";
            break;
    case ($average_marks < 50 && $average_marks >= 40):
            $grade = "C";
            break;
    case ($average_marks < 40 && $average_marks >= 34):
            $grade = "D";
            break;
    case ($average_marks < 34 && $average_marks >= 0):
            $grade = "F";
            break;      
    default:
            $grade = "invalid input";
            break;

    }

    return[
    'total_marks' => $total_marks,
    'average_marks' => $average_marks,
    'grade' => $grade,
    'result' => 'passed'
    ];

    
}

$math = 85;
$science = 90;
$islamic = 95;
$english = 50;
$arabic = 32;


$result = calculateResult($math,$science,$islamic,$english,$arabic);

echo "Total Marks:" . $result['total_marks']."<br>";
echo "Average Marks:". number_format($result['average_marks'],2)."<br>";
echo "Grade:". $result['grade']."<br>";




