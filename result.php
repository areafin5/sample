<?php
// Function for calculation result
function resultCalculation($marks) {

//check if failed in one or more subject
    foreach ($marks as $mark) {
        if ($mark < 33) {
            echo "Result: Failed in one or more subject \n";
            return;
        }
    }

//checking for invalid numbers
    foreach ($marks as $subject => $mark) {
        if ($mark < 0 || $mark > 100) {
            echo "Mark range is invalid for". $subject. "Please enter marks between 0 and 100. \n";
            return;
        }
    }

//Get avarage number 
    $total = array_sum($marks);
    $averageMarks = $total / count($marks);

//Grades calculation
    $grade = "";
    switch (true) {
        case ($averageMarks >= 80 && $averageMarks <= 100):
            $grade = "A+";
            break;
        case ($averageMarks >= 70 && $averageMarks < 80):
            $grade = "A";
            break;
        case ($averageMarks >= 60 && $averageMarks < 70):
            $grade = "A-";
            break;
        case ($averageMarks >= 50 && $averageMarks < 60):
            $grade = "B";
            break;
        case ($averageMarks >= 40 && $averageMarks < 50):
            $grade = "C";
            break;
        case ($averageMarks >= 33 && $averageMarks < 40):
            $grade = "D";
            break;
    }

//final result formating
    return "Total Mark: ". $total ."</br> Average Mark: " . (int)$averageMarks . "</br> Grade: ". $grade."</br>";
}

// Marks for student 
$allMarks = [
    "Math" => 85,
    "Science" => 70,
    "English" => 82,
    "bangla" => 78,
    "History" => 90,
    "Geography" => 70
];

echo resultCalculation($allMarks);


?>