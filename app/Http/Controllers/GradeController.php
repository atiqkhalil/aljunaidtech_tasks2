<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function showForm()
    {
        // Display the form to input marks
        return view('grade-form');
    }

    public function calculateGrade(Request $request)
    {
        // Validate the input
        $request->validate([
            'marks' => 'required|numeric|min:0|max:100',
        ]);

        // Get the marks from the form
        $marks = $request->input('marks');

        // Determine the grade based on the marks
        if ($marks >= 90) {
            $grade = 'A+';
        } elseif ($marks >= 80) {
            $grade = 'A';
        } elseif ($marks >= 70) {
            $grade = 'B';
        } elseif ($marks >= 60) {
            $grade = 'C';
        } else {
            $grade = 'FAIL';
        }

        // Return results to Blade view
        return view('grade-results', [
            'marks' => $marks,
            'grade' => $grade,
        ]);
    }
}
