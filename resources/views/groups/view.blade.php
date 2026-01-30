<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>single group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">


    
        <h1>Group name: {{$group->name}}</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>contact name</th>
                    <th>group name</th>
                    <th>phone number</th>
                </tr>
            </thead>
            <tbody>
                @if($contacts -> count())
                @foreach($contacts as $con)
                <tr>
                    <td>{{$con->name}}</td>
                    <td>{{$group->name}}</td>
                    <td>{{$con->phone}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>this group is empty</p>
        @endif

        <a href="{{ route('groups.index') }}" class="btn btn-secondary">Back to contact</a>
        <a href="{{ route('add') }}" class="btn btn-primary">Add Contact to this group</a>
   
</body>

</html>