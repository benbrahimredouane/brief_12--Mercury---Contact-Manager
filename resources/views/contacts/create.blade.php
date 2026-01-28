<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h1>Create New Contact</h1>

    <form method="POST" action="{{ route('contacts.store') }}" class="mt-4">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label"> Name</label>
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
            <label for="email" class="form-label"> Email</label>
            <input 
                type="email" 
                name="email" 
                id="email" 
                class="form-control" 
                required
                value="{{ old('email') }}"
            >
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text"
                name="phone" 
                id="phone" 
                class="form-control" 
               
            value="{{ old('phone') }}">
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-success">Save Contact</button>
            <a href="{{ route('contacts.index') }}" class="btn btn-secondary">Cancel</a>
        </div>
    </form>

</body>
</html>