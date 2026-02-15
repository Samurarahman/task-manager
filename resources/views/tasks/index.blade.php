<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">📋 Task Manager</h2>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">
            + Add Task
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($tasks->count() > 0)
        <div class="row">
            @foreach($tasks as $task)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="fw-bold">{{ $task->title }}</h5>
                            <p class="text-muted">{{ $task->description }}</p>

                            <div class="d-flex justify-content-between">
                                <a href="{{ route('tasks.edit', $task->id) }}" 
                                   class="btn btn-warning btn-sm">
                                   Edit
                                </a>

                                <form action="{{ route('tasks.destroy', $task->id) }}" 
                                      method="POST"
                                      onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-info">
            No tasks yet. Add your first task!
        </div>
    @endif

</div>

</body>
</html>
