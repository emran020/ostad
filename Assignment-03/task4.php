<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;

        $averageFormatted = number_format($average, 2);

        echo "Student $student's average grade is: $averageFormatted\n";
    }
}

$studentGrades = array(
    'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
    'Student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
    'Student3' => array('Math' => 75, 'English' => 82, 'Science' => 88)
);

calculateAverageGrades($studentGrades);
?>
