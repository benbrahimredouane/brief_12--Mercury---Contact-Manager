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

    <h1>Contact</h1>

    <a href="{{ route('contacts.create') }}" class="btn btn-primary mb-3">Add New Contact</a> 
    <a href="{{ route('home') }}" class="btn btn-primary mb-3">Back Home</a>

    @if ($contacts->isEmpty())
        <p>No Contacts yet.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>Active?</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email}}</td>
                        <td>{{ $contact->phone}}</td>
                        <td>{{ $contact->is_active ? 'Yes' : 'No' }}</td>
                        <td class="d-flex gap-2">
                            <a class="btn btn-warning" href="{{route('contacts.edit', $contact->id) }}">edit</a>
                            <form action=" {{route('contacts.destroy', $contact->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button type="submit" class="btn btn-danger">delete</button>
                            
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</body>
</html>