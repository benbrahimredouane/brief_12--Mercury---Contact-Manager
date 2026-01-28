<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h1>Create New Group</h1>

    <form method="POST" action="{{ route('groups.store') }}" class="mt-4">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Group Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="form-control" 
                required
                value="{{ old('name') }}"
            >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea 
                name="description" 
                id="description" 
                class="form-control" 
                rows="4"
            >{{ old('description') }}</textarea>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">Save Group</button>
            <a href="{{ route('groups.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>

</body>
</html>