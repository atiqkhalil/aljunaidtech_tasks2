<!-- resources/views/fibonacci-results.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Fibonacci Series</h1>
        
        <!-- Display Fibonacci Series -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h3>First 10 Numbers of Fibonacci Series</h3>
            </div>
            <div class="card-body">
                <p class="card-text">
                    @foreach ($fibonacciSeries as $number)
                        {{ $number }}
                        @if (!$loop->last)
                            , 
                        @endif
                    @endforeach
                </p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>