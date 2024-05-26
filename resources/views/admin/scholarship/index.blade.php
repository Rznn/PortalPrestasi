<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scholarship</title>
</head>
<body>
    <h1>Scholarship</h1>
    <a href="/admin/dashboard">Back to Dashboard</a>
    <br>
    <a href="/admin/scholarship/create">Create Scholarship</a>
    <table>
        <thead>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Organizer</th>
            <th>End Registration</th>
            <th>Start Scholarship</th>
            <th>Status</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($scholarships as $scholarship)
            <tr>
                <td>{{$scholarship->id}}</td>
                <td> <img src="{{ asset('/storage/scholarship-images/' . $scholarship->image) }}" alt="" style="width: 50px;"></td>
                <td>{{$scholarship->name}}</td>
                <td>{{$scholarship->organizer}}</td>
                <td>{{$scholarship->end_registration}}</td>
                <td>{{$scholarship->start_scholarship}}</td>
                <td>{{$scholarship->status}}</td>
                <td>
                    @if ($scholarship->status == 'upcoming')
                        <a href="{{ route('scholarship.detail', $scholarship->id) }}">Details</a>
                        <a href="{{ route('scholarship.toregistration', $scholarship->id) }}">Open Registration</a>
                        @if ($scholarship->scholarship_participants->isNotEmpty())
                        <a href="{{ route('scholarship.awardee', $scholarship->id) }}">Select Awardee</a>
                        @endif

                    @elseif ($scholarship->status == 'registration')
                        <a href="{{ route('scholarship.detail', $scholarship->id) }}">Details</a>
                        <a href="{{ route('scholarship.toongoing', $scholarship->id) }}">Start Scholarship</a>
                    @elseif ($scholarship->status == 'ongoing')
                        <a href="{{ route('scholarship.detail', $scholarship->id) }}">Details</a>
                        <a href="{{ route('scholarship.tofinished', $scholarship->id) }}">Finish Scholarship</a>
                    @else
                        <a href="{{ route('scholarship.detail', $scholarship->id) }}">Details</a>
                        @if ($scholarship->scholarship_participants->isNotEmpty())
                        <a href="{{ route('scholarship.awardee', $scholarship->id) }}">Select Awardee</a>
                        @endif
                        <a href="#">View Awardees</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
