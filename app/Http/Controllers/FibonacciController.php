<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function generateFibonacci()
    {
        // Initialize the first two numbers of the Fibonacci series
        $fibonacciSeries = [0, 1];

        // Generate the first 10 numbers of the Fibonacci series
        for ($i = 2; $i < 10; $i++) {
            $fibonacciSeries[$i] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
        }

        // Return results to Blade view
        return view('fibonacci-results', [
            'fibonacciSeries' => $fibonacciSeries,
        ]);
    }
}