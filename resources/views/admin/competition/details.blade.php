{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>

<body>
    <h1>Detail Competition</h1>
    <img src="{{ asset('/storage/competition-images/' . $competitions->image) }}" alt="" style="width: 200px">
    <h3>Name</h3>
    <p>{{ $competitions->name }}</p>
    <h3>Organizer</h3>
    <p>{{ $competitions->organizer }}</p>
    <h3>Description</h3>
    <p>{{ $competitions->description }}</p>
    <h3>Start Registration</h3>
    <p>{{ $competitions->start_registration }}</p>
    <h3>End Registration</h3>
    <p>{{ $competitions->end_registration }}</p>
    <h3>Start Competition</h3>
    <p>{{ $competitions->start_competition }}</p>
    <h3>End Competition</h3>
    <p>{{ $competitions->end_competition }}</p>
    <h3>Status</h3>
    <p>{{ $competitions->status }}</p>
    <h3>Action</h3>
    <a href="{{ $competitions->rules }}" target="_blank">View Rules</a>
    <a href="{{ route('competition.delete', $competitions->id) }}">Delete</a>
    <a href="{{ route('competition.edit', $competitions->id) }}">Edit</a>
</body>

</html> --}}

@extends('layout.admin.master')
@section('content')
    <div class="grid lg gap-6 mt-8">


        <div class="card bg-white overflow-hidden">
            <div class="card overflow-hidden sm:rounded-md rounded-none">
                <div class="px-6 py-8 flex gap-10">
                    <div class="mt-6 mb-4">
                        <img src="{{ asset('/storage/competition-images/' . $competitions->image) }}"
                            class="h-auto max-w-full" alt="thumbnail">
                    </div>
                    <div class="mt-6 mb-4">
                        <p class="text-dark/75 mb-6 text-xl mt-3">{{ $competitions->name }}</p>
                        <div class="grid lg:grid-cols-3 gap-6">
                            <div class="grid lg:grid-cols-2 gap-6">
                                <h3>Organizer</h3>
                                <p>{{ $competitions->organizer }}</p>
                                <h3>Description</h3>
                                <p>{{ $competitions->description }}</p>
                                <h3>Start Registration</h3>
                                <p>{{ $competitions->start_registration }}</p>

                            </div>
                            <div class="grid lg:grid-cols-2 gap-6">
                                <h3>End Registration</h3>
                                <p>{{ $competitions->end_registration }}</p>
                                <h3>Start Competition</h3>
                                <p>{{ $competitions->start_competition }}</p>
                                <h3>End Competition</h3>
                                <p>{{ $competitions->end_competition }}</p>
                            </div>
                            <div class="flex flex-col justify-between">
                                <a class="btn bg-primary text-white" href="{{ $competitions->rules }}" target="_blank">View
                                    Rules</a>
                                <a class="btn bg-primary text-white"
                                    href="{{ route('competition.delete', $competitions->id) }}">Delete</a>
                                <a class="btn bg-primary text-white"
                                    href="{{ route('competition.edit', $competitions->id) }}">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
