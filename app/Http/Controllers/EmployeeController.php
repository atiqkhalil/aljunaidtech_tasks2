<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function processEmployees()
    {
        // Create associative array of employees and salaries
        $employees = [
            'Ali' => 45000,
            'Hamza' => 60000,
            'Awais' => 30000,
            'Zain' => 75000,
            'Umar' => 50000,
        ];

        // Sort by salary in ascending order
        $sortedBySalaryAsc = $employees;
        asort($sortedBySalaryAsc);

        // Sort by employee names in descending order
        $sortedByNameDesc = $employees;
        krsort($sortedByNameDesc);

        // Find the employee with the highest salary
        $highestSalaryEmployee = array_search(max($employees), $employees);
        $highestSalary = $employees[$highestSalaryEmployee];

        // Return results to Blade view
        return view('employee-results', [
            'employees' => $employees,
            'sortedBySalaryAsc' => $sortedBySalaryAsc,
            'sortedByNameDesc' => $sortedByNameDesc,
            'highestSalaryEmployee' => $highestSalaryEmployee,
            'highestSalary' => $highestSalary,
        ]);
    }
}
