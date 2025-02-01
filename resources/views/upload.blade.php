<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Password Recovery</title>
</head>
<body>
    <h1>Upload PDF File for Password Recovery</h1>
    <form action="{{ route('recover.password') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="pdf_file">PDF File:</label>
            <input type="file" name="pdf_file" id="pdf_file" required>
        </div>
        <button type="submit">Recover Password</button>
    </form>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif
</body>
</html>