<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function processStudents()
    {
        // Create an associative array of students and their marks
        $students = [
            'Ali' => 85,
            'Hamza' => 42,
            'Awais' => 78,
            'Umar' => 91,
            'Zain' => 35,
        ];

        // Find the student with the highest marks
        $highestMarksStudent = array_search(max($students), $students);
        $highestMarks = $students[$highestMarksStudent];

        // Identify students who scored less than 50
        $studentsBelow50 = array_filter($students, function ($marks) {
            return $marks < 50;
        });

        // Return results to Blade view
        return view('student-results', [
            'students' => $students,
            'highestMarksStudent' => $highestMarksStudent,
            'highestMarks' => $highestMarks,
            'studentsBelow50' => $studentsBelow50,
        ]);
    }
}
