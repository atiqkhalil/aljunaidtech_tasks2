<!-- resources/views/employee-results.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary Operations</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Employee Salary Operations</h1>
        
        <!-- Original Employee Array -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h3>Original Employee Array</h3>
            </div>
            <div class="card-body">
                <pre>{{ print_r($employees, true) }}</pre>
            </div>
        </div>

        <!-- Sorted by Salary (Ascending) -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h3>Sorted by Salary (Ascending)</h3>
            </div>
            <div class="card-body">
                <pre>{{ print_r($sortedBySalaryAsc, true) }}</pre>
            </div>
        </div>

        <!-- Sorted by Employee Names (Descending) -->
        <div class="card mb-4">
            <div class="card-header bg-warning text-dark">
                <h3>Sorted by Employee Names (Descending)</h3>
            </div>
            <div class="card-body">
                <pre>{{ print_r($sortedByNameDesc, true) }}</pre>
            </div>
        </div>

        <!-- Employee with Highest Salary -->
        <div class="card mb-4">
            <div class="card-header bg-danger text-white">
                <h3>Employee with Highest Salary</h3>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Employee:</strong> {{ $highestSalaryEmployee }}, <strong>Salary:</strong> ${{ number_format($highestSalary, 2) }}</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>