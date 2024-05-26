{{-- <!DOCTYPE html>
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

        @if ($scholarships->image)
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
</html> --}}


@extends('layout.admin.master')
@section('content')
    <div class=" gap-6 mt-8">

        <div class="flex flex-col gap-6">
            <div class="card">
                <div class="p-6">
                    <h4 class="card-title mb-4">Browser defaults</h4>
                    <form action="{{ route('scholarship.update', $scholarships->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div>
                            <label for="name" class="text-gray-800 text-sm font-medium inline-block mb-2">Competition
                                Name</label>
                            <input class="form-input" type="text" name="name" id="name"
                                value="{{ $scholarships->name }}" required>
                        </div>
                        <div>
                            <label for="organizer" class="text-gray-800 text-sm font-medium inline-block mb-2">Competition
                                Organizer</label>
                            <input class="form-input" type="text" name="organizer" id="organizer"
                                value="{{ $scholarships->organizer }}" required>
                        </div>

                        <div>
                            <label for="requirement"
                                class="text-gray-800 text-sm font-medium inline-block mb-2">Requirement's
                                Link</label>
                            <input type="url" class="form-input" name="requirement" id="requirement"
                                value="{{ $scholarships->requirement }}" required>
                        </div>
                        <div>
                            <label for="start_registration"
                                class="text-gray-800 text-sm font-medium inline-block mb-2">Start Registration</label>
                            <input class="form-input" type="date" name="start_registration" id="start_registration"
                                value="{{ \Carbon\Carbon::parse($scholarships->start_registration)->format('Y-m-d') }}"
                                required>
                        </div>
                        <div>
                            <label for="end_registration" class="text-gray-800 text-sm font-medium inline-block mb-2">End
                                Registration</label>
                            <input class="form-input" type="date" name="end_registration" id="end_registration"
                                value="{{ \Carbon\Carbon::parse($scholarships->end_registration)->format('Y-m-d') }}"
                                required>
                        </div>
                        <div>
                            <label for="start_scholarship" class="text-gray-800 text-sm font-medium inline-block mb-2">Start
                                Scholarship</label>
                            <input class="form-input" type="date" name="start_scholarship" id="start_scholarship"
                                value="{{ \Carbon\Carbon::parse($scholarships->start_scholarship)->format('Y-m-d') }}"
                                required>
                        </div>
                        <div>
                            <label for="end_scholarship" class="text-gray-800 text-sm font-medium inline-block mb-2">End
                                Scholarship</label>
                            <input class="form-input" type="date" name="end_scholarship" id="end_scholarship"
                                value="{{ \Carbon\Carbon::parse($scholarships->end_scholarship)->format('Y-m-d') }}"
                                required>
                        </div>
                        <div class="col-span-3">
                            <label for="description"
                                class="text-gray-800 text-sm font-medium inline-block mb-2">Description</label>
                            <textarea rows="4" class="form-textarea" name="description" id="description"
                                value="{{ $scholarships->description }}"></textarea>
                        </div>

                        <div class="col-span-3">
                            <label for="image" class="text-gray-800 text-sm font-medium inline-block mb-2">Photo</label>
                            <input type="file" name="image" id="image" class="dropify"
                                data-default-file="url_of_your_file" />
                        </div>

                        <div class="col-span-3 mt-3">
                            <button type="submit" class="btn bg-primary text-white">Submit</button>
                            <a href="{{ route('competition.detail', $scholarships->id) }}"
                                class="btn bg-primary text-white">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('.dropify').dropify();
    </script>
@endsection
