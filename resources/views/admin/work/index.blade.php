<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Vacancies</title>
</head>
<body>
    <h1>Job Vacancies</h1>
    <a href="/admin/dashboard">Back to Dashboard</a>
    <br>
    <a href="/admin/work/create">Create Job</a>
    <table>
        <thead>
            <th>Id</th>
            <th>Image</th>
            <th>Job Name</th>
            <th>Company</th>
            <th>Email</th>
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
                <td>{{$work->email}}</td>
                <td>{{$work->salary}}</td>
                <td>
                    <a href="{{ route('work.detail', $work->id) }}">Details</a>
                    <a href="{{$work->information}}" target="_blank">See Info</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
