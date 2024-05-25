<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Job</title>
</head>
<body>
    <h1>Create Job</h1>
    <form action="{{ route('work.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="job_name">Job Name</label>
        <input type="text" name="job_name" id="job_name"  placeholder="Enter Job Name" required>

        <label for="company">Company</label>
        <input type="text" name="company" id="company" placeholder="Enter Job Company" required>

        <label for="description">Description</label>
        <textarea name="description" id="description" placeholder="Enter Job Description" cols="30" rows="10"></textarea>

        <label for="information">Job Information's Link</label>
        <input type="url" name="information" id="information" placeholder="Enter Job Information" required>

        <label for="image">Company Logo</label>
        <input type="file" name="image" id="image" required>

        <br>

        <label for="salary">Salary</label>
        <input type="number" name="salary" id="salary" placeholder="Enter Job Salary" required>

        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact" placeholder="Enter Company Contact" required>

        <label for="email">Company Email</label>
        <input type="email" name="email" id="email" placeholder="Enter Company Email" required>

        <br>

        <input type="submit" class="button" value="Submit">
    </form>
</body>
</html>
