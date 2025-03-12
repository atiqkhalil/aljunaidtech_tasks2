<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Result</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Grade Result</h1>
        
        <!-- Display Marks and Grade -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h3>Your Grade</h3>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Marks:</strong> {{ $marks }}</p>
                <p class="card-text"><strong>Grade:</strong> {{ $grade }}</p>
            </div>
        </div>

        <!-- Back Button -->
        <a href="{{ route('show-cform') }}" class="btn btn-primary">Back to Form</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>