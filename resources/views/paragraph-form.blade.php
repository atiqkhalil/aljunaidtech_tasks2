<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragraph Analyzer</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Paragraph Analyzer</h1>
        
        <!-- Form to Input Paragraph -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h3>Enter a Paragraph (Minimum 500 Words)</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('process-paragraph') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="paragraph">Paragraph:</label>
                        <textarea name="paragraph" id="paragraph" class="form-control" rows="10" required minlength="500"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success mt-3">Analyze Paragraph</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>