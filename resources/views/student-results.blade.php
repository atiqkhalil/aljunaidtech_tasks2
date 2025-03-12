<!-- resources/views/student-results.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Student Marks</h1>
        
        <!-- Display Student Names and Marks -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h3>Student Marks</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Student Name</th>
                            <th>Marks</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $name => $marks)
                            <tr>
                                <td>{{ $name }}</td>
                                <td>{{ $marks }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Student with Highest Marks -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h3>Student with Highest Marks</h3>
            </div>
            <div class="card-body">
                <p class="card-text"><strong>Student:</strong> {{ $highestMarksStudent }}, <strong>Marks:</strong> {{ $highestMarks }}</p>
            </div>
        </div>

        <!-- Students Who Scored Less Than 50 -->
        <div class="card mb-4">
            <div class="card-header bg-danger text-white">
                <h3>Students Who Scored Less Than 50</h3>
            </div>
            <div class="card-body">
                <ul>
                    @foreach ($studentsBelow50 as $name => $marks)
                        <li>{{ $name }}: {{ $marks }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>