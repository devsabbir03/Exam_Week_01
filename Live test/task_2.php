<?php

class Student {
    // Attributes
    private $name;
    private $grades;

    // Constructor to initialize attributes
    public function __construct($name, $grades) {
        $this->name = $name;
        $this->grades = $grades;
    }

    // Method to calculate the average of grades
    public function averageGrade() {
        if (empty($this->grades)) {
            return 0;
        }
        $total = array_sum($this->grades); 
        $count = count($this->grades);
        return $total / $count; 
    }

    // Method to display the result
    public function displayResult() {
        $average = $this->averageGrade(); 
        echo "Student Name: {$this->name}\n";
        echo "Average Grade: " . number_format($average, 2) . "\n";
    }
}

//usage of the Student class:
$student = new Student("Sabbir", [75, 80, 88, 92]);
$student->displayResult();

?>
