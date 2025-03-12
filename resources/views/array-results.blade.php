<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Operations</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Array Operations in Laravel</h1>
        
        <!-- Original Array -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h3>Original Array</h3>
            </div>
            <div class="card-body">
                <p class="card-text">{{ implode(', ', $originalArray) }}</p>
            </div>
        </div>

        <!-- Sum of Array -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h3>Sum of Array</h3>
            </div>
            <div class="card-body">
                <p class="card-text">{{ $sum }}</p>
            </div>
        </div>

        <!-- Array Without Duplicates -->
        <div class="card mb-4">
            <div class="card-header bg-warning text-dark">
                <h3>Array Without Duplicates</h3>
            </div>
            <div class="card-body">
                <p class="card-text">{{ implode(', ', $uniqueArray) }}</p>
            </div>
        </div>

        <!-- Maximum and Minimum Values -->
        <div class="card mb-4">
            <div class="card-header bg-danger text-white">
                <h3>Maximum and Minimum Values</h3>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Max:</strong> {{ $max }}, <strong>Min:</strong> {{ $min }}</p>
            </div>
        </div>

        <!-- Sorted Array (Ascending) -->
        <div class="card mb-4">
            <div class="card-header bg-info text-white">
                <h3>Sorted Array (Ascending)</h3>
            </div>
            <div class="card-body">
                <p class="card-text">{{ implode(', ', $sortedArray) }}</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>