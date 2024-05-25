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
                    @if ($scholarship->status == 'registration' || $scholarship->status == 'upcoming')
                        <a href="{{ route('user.scholarship.details', $scholarship->id) }}">Details</a>
                        <a href="{{ route('user.scholarship.enroll', $scholarship->id) }}">Enroll</a>
                    @elseif ($scholarship->status == 'finished')
                        <a href="{{ route('user.scholarship.details', $scholarship->id) }}">Details</a>
                        <a href="">Awardee</a>
                    @else
                        <a href="{{ route('user.scholarship.details', $scholarship->id) }}">Details</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
