<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultiplicationController extends Controller
{
    public function showForm()
    {
        // Display the form to input a number
        return view('multiplication-form');
    }

    public function generateTable(Request $request)
    {
        // Validate the input
        $request->validate([
            'number' => 'required|numeric|min:1',
        ]);

        // Get the number from the form
        $number = $request->input('number');

        // Generate the multiplication table using a while loop
        $table = [];
        $i = 1;
        while ($i <= 10) {
            $table[] = "$number x $i = " . ($number * $i);
            $i++;
        }

        // Return results to Blade view
        return view('multiplication-results', [
            'number' => $number,
            'table' => $table,
        ]);
    }
}