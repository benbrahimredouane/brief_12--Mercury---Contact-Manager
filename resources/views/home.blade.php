<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container vh-100 d-flex justify-content-center align-items-center flex-column">
        <h1>welcome to mercury</h1>

        <h3>what do you want?</h3>

        <a href="{{ route('contacts.index') }}"class="btn btn-primary mb-3">Contact</a><a href="{{ route('groups.index') }}"class="btn btn-primary mb-3">Groups</a>
    </div>
    
</body>
</html>