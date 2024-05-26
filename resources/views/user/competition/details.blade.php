<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
    <h1>Detail Competition</h1>
    <img src="{{ asset('/storage/competition-images/'. $competitions->image) }}" alt="" style="width: 200px">
    <h3>Name</h3>
    <p>{{ $competitions->name }}</p>
    <h3>Organizer</h3>
    <p>{{ $competitions->organizer }}</p>
    <h3>Description</h3>
    <p>{{ $competitions->description }}</p>
    <h3>Start Registration</h3>
    <p>{{ $competitions->start_registration }}</p>
    <h3>End Registration</h3>
    <p>{{ $competitions->end_registration }}</p>
    <h3>Start Competition</h3>
    <p>{{ $competitions->start_competition }}</p>
    <h3>End Competition</h3>
    <p>{{ $competitions->end_competition }}</p>
    <h3>Status</h3>
    <p>{{ $competitions->status }}</p>
    <h3>Action</h3>
    <a href="{{ $competitions->rules }}" target="_blank">View Rules</a>
    <a href="{{ route('user.competition.enroll', $competitions->id) }}">Enroll</a>
</body>
</html>
