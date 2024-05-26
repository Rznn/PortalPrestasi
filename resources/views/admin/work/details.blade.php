<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>
<body>
    <h1>Detail Job</h1>
    <img src="{{ asset('/storage/work-images/'. $works->image) }}" alt="" style="width: 200px">
    <h3>Job Name</h3>
    <p>{{ $works->job_name }}</p>
    <h3>Company</h3>
    <p>{{ $works->company }}</p>
    <h3>Description</h3>
    <p>{{ $works->description }}</p>
    <h3>Salary</h3>
    <p>{{ $works->salary }}</p>
    <h3>Email</h3>
    <p>{{ $works->email }}</p>
    <h3>Contact</h3>
    <p>{{ $works->contact }}</p>
    <h3>Action</h3>
    <a href="{{ $works->requirement }}" target="_blank">View Information</a>
    <a href="{{ route('work.delete', $works->id) }}">Delete</a>
    <a href="{{ route('work.edit', $works->id) }}">Edit</a>
</body>
</html>
