{{-- <!DOCTYPE html>
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
        <input type="text" name="name" id="name" placeholder="Enter Scholarship Name" required>

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

</html> --}}



@extends('layout.admin.master')
@section('content')
    <main class="p-6">
        <div class="flex flex-col gap-6">
            <div class="card">
                <div class="p-6">
                    <h4 class="card-title mb-4">Browser defaults</h4>
                    <form action="{{ route('scholarship.store') }}" method="post" class="grid lg:grid-cols-3 gap-6"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="name" class="text-gray-800 text-sm font-medium inline-block mb-2">Scholarship
                                Name</label>
                            <input class="form-input" type="text" name="name" id="name"
                                placeholder="Enter Scholarship Name" required>
                        </div>


                        <div>
                            <label for="organizer" class="text-gray-800 text-sm font-medium inline-block mb-2">Scholarship
                                Organizer</label>
                            <input class="form-input" type="text" name="organizer" id="organizer"
                                placeholder="Enter Scholarship Organizer" required>
                        </div>

                        <div>
                            <label for="rules" class="text-gray-800 text-sm font-medium inline-block mb-2">Rule's
                                Link</label>
                            <input type="url" class="form-input" name="requirement" id="requirement"
                                placeholder="Enter Scholarship Requirement" required>
                        </div>



                        <div>
                            <label for="start_registration"
                                class="text-gray-800 text-sm font-medium inline-block mb-2">Start Registration</label>
                            <input class="form-input" type="date" name="start_registration" id="start_registration"
                                required>
                        </div>
                        <div>
                            <label for="end_registration" class="text-gray-800 text-sm font-medium inline-block mb-2">End
                                Registration</label>
                            <input class="form-input" type="date" name="end_registration" id="end_registration" required>
                        </div>
                        <div>
                            <label for="start_Scholarship" class="text-gray-800 text-sm font-medium inline-block mb-2">Start
                                Scholarship</label>
                            <input class="form-input" type="date" name="start_scholarship" id="start_scholarship"
                                required>
                        </div>
                        <div>
                            <label for="end_Scholarship" class="text-gray-800 text-sm font-medium inline-block mb-2">End
                                Scholarship</label>
                            <input class="form-input" type="date" name="end_scholarship" id="end_scholarship" required>
                        </div>
                        <div>
                            <label for="description"
                                class="text-gray-800 text-sm font-medium inline-block mb-2">Description</label>
                            <textarea rows="4" class="form-textarea" name="description" id="description"
                                placeholder="Enter Scholarship Description"></textarea>
                        </div>

                        <div class="col-span-3">
                            <label for="image" class="text-gray-800 text-sm font-medium inline-block mb-2">Photo</label>
                            <input type="file" name="image" id="image" required class="dropify"
                                data-default-file="url_of_your_file" />
                        </div>

                        <div class="col-span-3">
                            <button type="submit" class="btn bg-primary text-white">Submit</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </main>
    <script>
        $('.dropify').dropify();
    </script>
@endsection
