<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow border-0">
        <div class="card-body">
            <h3 class="mb-4">➕ Add New Task</h3>

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Task Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-success">
                    Save Task
                </button>

                <a href="{{ route('tasks.index') }}" 
                   class="btn btn-secondary">
                   Back
                </a>
            </form>

        </div>
    </div>
</div>

</body>
</html>
