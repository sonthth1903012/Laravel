<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List student</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>
<div class="container">
    <h3 style="text-decoration: underline; text-transform: uppercase">Servey</h3>

    <div class="py-4">
        <a href="{{url('/add/servey')}}" class="btn btn-outline-danger">Add Student</a>
    </div>
    <table class="table tables-dark">
        <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Telephone</th>
        <th>Feddback</th>
        </thead>
        <tbody>
        @foreach($list as $s)
            <tr>
                <td>{{$s->id}}</td>
                <td>{{$s->name}}</td>
                <td>{{$s->email}}</td>
                <td>{{$s->telephone}}</td>
                <td>{{$s->feedback}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>
