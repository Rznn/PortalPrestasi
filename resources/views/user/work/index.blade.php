<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Ini Index Scholarship</h1>
    <a href="{{ route('user.dashboard') }}">Back to dashboard</a>
    <table>
        <thead>
            <th>Id</th>
            <th>Image</th>
            <th>Job Name</th>
            <th>Company</th>
            <th>Description</th>
            <th>Salary</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($works as $work)
            <tr>
                <td>{{$work->id}}</td>
                <td> <img src="{{ asset('/storage/work-images/' . $work->image) }}" alt="" style="width: 50px;"></td>
                <td>{{$work->job_name}}</td>
                <td>{{$work->company}}</td>
                <td>{{$work->description}}</td>
                <td>{{$work->salary}}</td>
                <td>
                    <a href="{{$work->information}}" target="_blank">See Info</a>
                    <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $work->email }}" target="_blank">Email</a>
                    <a href="https://wa.me/{{$work->contact}}" target="_blank">Contact</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
