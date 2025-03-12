<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function processArray()
    {
        // Generate indexed array of 10 random numbers (1-100)
        $originalArray = [];
        for ($i = 0; $i < 10; $i++) {
            $originalArray[] = rand(1, 100);
        }

        // Find the sum of all elements
        $sum = array_sum($originalArray);

        // Remove duplicates and reindex the array
        $uniqueArray = array_values(array_unique($originalArray));

        // Find maximum and minimum values
        $max = max($originalArray);
        $min = min($originalArray);

        // Sort the original array in ascending order
        $sortedArray = $originalArray;
        sort($sortedArray);

        // Return results to Blade view
        return view('array-results', [
            'originalArray' => $originalArray,
            'sum' => $sum,
            'uniqueArray' => $uniqueArray,
            'max' => $max,
            'min' => $min,
            'sortedArray' => $sortedArray
        ]);
    }
}