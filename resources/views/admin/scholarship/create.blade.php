<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Scholarship</title>
</head>
<body>
    <h1>Create Scholarship</h1>
    <form action="{{ route('scholarship.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="name">Scholarship Name</label>
        <input type="text" name="name" id="name"  placeholder="Enter Scholarship Name" required>

        <label for="organizer">Organizer</label>
        <input type="text" name="organizer" id="organizer" placeholder="Enter Scholarship Organizer" required>

        <label for="description">Description</label>
        <textarea name="description" id="description" placeholder="Enter Scholarship Description" cols="30" rows="10"></textarea>

        <label for="requirement">Requirement's Link</label>
        <input type="url" name="requirement" id="requirement" placeholder="Enter Scholarship Requirement" required>

        <label for="image">Photo</label>
        <input type="file" name="image" id="image" required>

        <br>

        <label for="start_registration">Start Registration</label>
        <input type="date" name="start_registration" id="start_registration" required>

        <label for="end_registration">End Registration</label>
        <input type="date" name="end_registration" id="end_registration" required>

        <label for="start_scholarship">Start Scholarship</label>
        <input type="date" name="start_scholarship" id="start_scholarship" required>

        <label for="end_scholarship">End Scholarship</label>
        <input type="date" name="end_scholarship" id="end_scholarship" required>

        <br>

        <input type="submit" class="button" value="Submit">
    </form>
</body>
</html>
