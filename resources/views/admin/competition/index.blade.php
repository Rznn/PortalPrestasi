<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Competition</title>
</head>
<body>
    <h1>Competition</h1>
    <a href="/admin/competition/create">Create Competition</a>
    <table>
        <thead>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Organizer</th>
            <th>End Registration</th>
            <th>Start Competition</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($competitions as $competition)
            <tr>
                <td>{{$competition->id}}</td>
                <td> <img src="{{ asset('/storage/competition-images/' . $competition->image) }}" alt="" style="width: 50px;"></td>
                <td>{{$competition->name}}</td>
                <td>{{$competition->organizer}}</td>
                <td>{{$competition->end_registration}}</td>
                <td>{{$competition->start_competition}}</td>
                <td>{{$competition->status}}</td>
                <td>
                    <a href="{{ route('competition.detail', $competition->id) }}">Details</a>
                    <a href="">Change</a>
                    <a href="">Winner</a>
                    <a href="">Modal</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
