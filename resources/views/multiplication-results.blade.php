<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Multiplication Table for {{ $number }}</h1>
        
        <!-- Display Multiplication Table -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h3>Table (1 to 10)</h3>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($table as $row)
                        <li class="list-group-item">{{ $row }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <!-- Back Button -->
        <a href="{{ route('show-mform') }}" class="btn btn-primary">Back to Form</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>