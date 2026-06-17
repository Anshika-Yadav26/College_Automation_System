<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Assignment</title>
</head>
<body>
    <h1>Create Assignment</h1>
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('assignments.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Class ID:</label>
        <input type="number" name="class_id" required><br>

        <label>Title:</label>
        <input type="text" name="title" required><br>

        <label>Description:</label>
        <textarea name="description"></textarea><br>

        <label>Due Date:</label>
        <input type="date" name="due_date" required><br>

        <label>File (optional):</label>
        <input type="file" name="file"><br>

        <button type="submit">Create Assignment</button>
    </form>
</body>
</html>
