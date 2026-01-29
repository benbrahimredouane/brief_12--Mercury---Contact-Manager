<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groups</title>
    <!-- Bootstrap CDN for quick styling (optional but helpful) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <h1>Groups</h1>

    <a href="{{ route('groups.create') }}" class="btn btn-primary mb-3">Add New Group</a>
    <a href="{{ route('home') }}" class="btn btn-primary mb-3">Back Home</a>

    @if ($groups->isEmpty())
    <p>No groups yet.</p>
    @else
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Active?</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($groups as $group)
            <tr>
                <td>{{ $group->id }}</td>
                <td>{{ $group->name }}</td>
                <td>{{ $group->description ?? '—' }}</td>
                <td>{{ $group->is_active ? 'Yes' : 'No' }}</td>
                <td class="d-flex gap-2">
                    <a class="btn btn-warning" href="{{route('groups.edit', $group->id) }}">edit</a>
                    <form action=" {{route('groups.destroy', $group->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">delete</button>

                    </form>
                     <a class="btn btn-primary" href="{{route('groups.show', $group->id ) }}">view</a>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

</body>

</html>