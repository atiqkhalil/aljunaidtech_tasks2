<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph Analysis</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Paragraph Analysis</h1>
        
        <!-- Display Analysis Results -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h3>Analysis Results</h3>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Total Words:</strong> {{ $wordCount }}</p>
                <p class="card-text"><strong>Most Repeated Word:</strong> {{ $mostRepeatedWord }}</p>
                <p class="card-text"><strong>First Word:</strong> {{ $firstWord }}</p>
                <p class="card-text"><strong>Last Word:</strong> {{ $lastWord }}</p>
            </div>
        </div>

        <!-- Back Button -->
        <a href="{{ route('show-pform') }}" class="btn btn-primary">Back to Form</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>