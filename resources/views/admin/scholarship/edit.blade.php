<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Scholarship</title>
</head>
<body>
    <h1>Edit Scholarship</h1>
    <form action="{{ route('scholarship.update', $scholarships->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="name">Scholarship Name</label>
        <input type="text" name="name" id="name"  placeholder="Enter scholarship Name" value="{{ $scholarships->name }}" required>

        <label for="organizer">Organizer</label>
        <input type="text" name="organizer" id="organizer" placeholder="Enter Scholarship Organizer" value="{{ $scholarships->organizer }}" required>

        <label for="description">Description</label>
        <textarea name="description" id="description" placeholder="Enter Scholarship Description" cols="30" rows="10" required>{{ $scholarships->description }}</textarea>

        <label for="requirement">Requirement Link</label>
        <input type="url" name="requirement" id="requirement" placeholder="Enter Scholarship Rules" value="{{ $scholarships->requirement }}" required>

        <label for="image">Photo</label>
        <input type="file" name="image" id="image">

        @if($scholarships->image)
            <label for="image">Current Photo</label>
            <img src="{{ asset('storage/scholarship-images/' . $scholarships->image) }}" alt="Scholarship Image" style="max-width: 200px;">
        @endif

        <br>

        <label for="start_registration">Start Registration</label>
        <input type="date" name="start_registration" id="start_registration" value="{{ \Carbon\Carbon::parse($scholarships->start_registration)->format('Y-m-d') }}" required>

        <label for="end_registration">End Registration</label>
        <input type="date" name="end_registration" id="end_registration" value="{{ \Carbon\Carbon::parse($scholarships->end_registration)->format('Y-m-d') }}" required>

        <label for="start_scholarship">Start Scholarship</label>
        <input type="date" name="start_scholarship" id="start_scholarship" value="{{ \Carbon\Carbon::parse($scholarships->start_scholarship)->format('Y-m-d') }}" required>

        <label for="end_scholarship">End Scholarship</label>
        <input type="date" name="end_scholarship" id="end_scholarship" value="{{ \Carbon\Carbon::parse($scholarships->end_scholarship)->format('Y-m-d') }}" required>

        <br>

        <input type="submit" class="button" value="Submit">
    </form>
</body>
</html>
