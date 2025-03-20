<?php
$students = [
    ["name" => "Alice", "marks" => ["Math" => 85, "Science" => 90]],
    ["name" => "Bunny", "marks" => ["Math" => 95, "Science" => 88]],
    ["name" => "Chirag", "marks" => ["Math" => 89, "Science" => 78]]
];

foreach ($students as $student) {
    $marks = $student["marks"];
    $average = array_sum($marks)/count($marks);
    echo $student["name" ] ."'s Average Marks: " . round($average,2) . "\n";
}
?>