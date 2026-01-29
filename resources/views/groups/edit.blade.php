<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit  Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h1>Edit Group</h1>

    <h2>zorking</h2>

    <form method="POST" action="{{ route('groups.update',$group->id) }}" class="mt-4">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Group Name</label>
            <input 
                type="text" 
                name="name" 
                id="name" 
                class="form-control" 
                required
                value="{{ old('name', $group->name) }}"
            >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea 
                name="description" 
                id="description" 
                class="form-control" 
                rows="4"
                
            >{{ old('description', $group->description) }}</textarea>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">UPDATE Group</button>
            <a href="{{ route('groups.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>

</body>
</html>