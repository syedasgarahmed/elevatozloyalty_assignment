<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-color: #f8f9fa;
        }

        .card {
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .btn {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="card text-center">
        <h1>Welcome</h1>
        <p>Select an option below:</p>
        <div>
            <a href="{{ route('create-account') }}" class="btn btn-primary btn-lg w-100">Create Account</a>
            <a href="{{ route('validate-account') }}" class="btn btn-secondary btn-lg w-100">Validate Account</a>
            {{-- <a href="{{ route('get-profile') }}" class="btn btn-success btn-lg w-100">Get Profile</a> --}}
        </div>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
