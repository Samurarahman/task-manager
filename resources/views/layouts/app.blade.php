<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task Manager</title>

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark shadow">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('tasks.index') }}">
            🚀 Task Manager
        </a>
    </div>
</nav>

<div class="container mt-5">
    @yield('content')
</div>

</body>
</html>
