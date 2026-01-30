<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>find</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5"> 
    <h1>find a contact by name:</h1>

    <form action="{{route('showfind')}}" method="get" class=" mt-4 mb-4 d-flex gap-2">

        <input type="search" name="submit" value="{{request('submit')}}" class="form-control">
        <button type="submit" class="btn btn-warning" >find</button >

    </form>


    @if ($contacts->isEmpty())
    <p>search by valid name.</p>
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