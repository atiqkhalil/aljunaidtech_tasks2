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
        <h1 class="text-center mb-4">Multiplication Table Generator</h1>
        
        <!-- Form to Input Number -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h3>Enter a Number</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('generate-table') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="number">Number:</label>
                        <input type="number" name="number" id="number" class="form-control" required min="1">
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Generate Table</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>