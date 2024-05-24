<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Competition</title>
</head>
<body>
    <h1>Edit Competition</h1>
    <form action="{{ route('competition.update', $competitions->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="name">Competition Name</label>
        <input type="text" name="name" id="name"  placeholder="Enter Competition Name" value="{{ $competitions->name }}" required>

        <label for="organizer">Organizer</label>
        <input type="text" name="organizer" id="organizer" placeholder="Enter Competition Organizer" value="{{ $competitions->organizer }}" required>

        <label for="description">Description</label>
        <textarea name="description" id="description" placeholder="Enter Competition Description" cols="30" rows="10" required>{{ $competitions->description }}</textarea>

        <label for="rules">Rule's Link</label>
        <input type="url" name="rules" id="rules" placeholder="Enter Competition Rules" value="{{ $competitions->rules }}" required>

        <label for="image">Photo</label>
        <input type="file" name="image" id="image">

        @if($competitions->image)
            <label for="image">Current Photo</label>
            <img src="{{ asset('storage/competition-images/' . $competitions->image) }}" alt="Competition Image" style="max-width: 200px;">
        @endif

        <br>

        <label for="start_registration">Start Registration</label>
        <input type="date" name="start_registration" id="start_registration" value="{{ \Carbon\Carbon::parse($competitions->start_registration)->format('Y-m-d') }}" required>

        <label for="end_registration">End Registration</label>
        <input type="date" name="end_registration" id="end_registration" value="{{ \Carbon\Carbon::parse($competitions->end_registration)->format('Y-m-d') }}" required>

        <label for="start_competition">Start Competition</label>
        <input type="date" name="start_competition" id="start_competition" value="{{ \Carbon\Carbon::parse($competitions->start_competition)->format('Y-m-d') }}" required>

        <label for="end_competition">End Competition</label>
        <input type="date" name="end_competition" id="end_competition" value="{{ \Carbon\Carbon::parse($competitions->end_competition)->format('Y-m-d') }}" required>

        <br>

        <input type="submit" class="button" value="Submit">
    </form>
</body>
</html>
