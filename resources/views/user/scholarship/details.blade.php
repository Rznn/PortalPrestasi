<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail</title>
</head>
<body>
    <h1>Detail Scholarship</h1>
    <img src="{{ asset('/storage/scholarship-images/'. $scholarships->image) }}" alt="" style="width: 200px">
    <h3>Name</h3>
    <p>{{ $scholarships->name }}</p>
    <h3>Organizer</h3>
    <p>{{ $scholarships->organizer }}</p>
    <h3>Description</h3>
    <p>{{ $scholarships->description }}</p>
    <h3>Start Registration</h3>
    <p>{{ $scholarships->start_registration }}</p>
    <h3>End Registration</h3>
    <p>{{ $scholarships->end_registration }}</p>
    <h3>Start Scholarship</h3>
    <p>{{ $scholarships->start_scholarship }}</p>
    <h3>End Scholarship</h3>
    <p>{{ $scholarships->end_scholarship }}</p>
    <h3>Status</h3>
    <p>{{ $scholarships->status }}</p>
    <h3>Action</h3>
    <a href="{{ $scholarships->requirement }}" target="_blank">View Requirement</a>
    <a href="{{ route('user.scholarship.enroll', $scholarships->id) }}">Enroll</a>
</body>
</html>
