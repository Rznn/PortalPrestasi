<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>Ini Index Competition</h1>
    <a href="{{ route('user.dashboard') }}">Back to dashboard</a>
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
                    @if ($competition->status == 'registration' || $competition->status == 'upcoming')
                        <a href="{{ route('user.competition.details', $competition->id) }}">Details</a>
                        <a href="{{ route('user.competition.enroll', $competition->id) }}">Enroll</a>
                    @elseif ($competition->status == 'finished')
                        <a href="{{ route('user.competition.details', $competition->id) }}">Details</a>
                        <a href="">Leaderboard</a>
                    @else
                        <a href="{{ route('user.competition.details', $competition->id) }}">Details</a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
