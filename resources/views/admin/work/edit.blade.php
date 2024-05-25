<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Job</title>
</head>
<body>
    <h1>Edit Job</h1>
    <form action="{{ route('work.update', $works->id ) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="job_name">Job Name</label>
        <input type="text" name="job_name" id="job_name" value="{{$works->job_name}}" placeholder="Enter Job Name" required>

        <label for="company">Company</label>
        <input type="text" name="company" id="company" value="{{$works->company}}" placeholder="Enter Job Company" required>

        <label for="description">Description</label>
        <textarea name="description" id="description" placeholder="Enter Job Description" cols="30" rows="10">{{$works->description}}</textarea>

        <label for="information">Job Information's Link</label>
        <input type="url" name="information" id="information" value="{{$works->information}}" placeholder="Enter Job Information" required>

        <label for="image">Company Logo</label>
        <input type="file" name="image" id="image" required>

        @if($works->image)
            <label for="image">Current Photo</label>
            <img src="{{ asset('storage/work-images/' . $works->image) }}" alt="Work Image" style="max-width: 200px;">
        @endif

        <br>

        <label for="salary">Salary</label>
        <input type="number" name="salary" id="salary" value="{{$works->salary}}" placeholder="Enter Job Salary" required>

        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact" value="{{$works->contact}}" placeholder="Enter Company Contact" required>

        <label for="email">Company Email</label>
        <input type="email" name="email" id="email" value="{{$works->email}}" placeholder="Enter Company Email" required>

        <br>

        <input type="submit" class="button" value="Submit">
    </form>
</body>
</html>
