{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Vacancies</title>
</head>

<body>
    <h1>Job Vacancies</h1>
    <a href="/admin/dashboard">Back to Dashboard</a>
    <br>
    <a href="/admin/work/create">Create Job</a>
    <table>
        <thead>
            <th>Id</th>
            <th>Image</th>
            <th>Job Name</th>
            <th>Company</th>
            <th>Email</th>
            <th>Salary</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach ($works as $work)
                <tr>
                    <td>{{ $work->id }}</td>
                    <td> <img src="{{ asset('/storage/work-images/' . $work->image) }}" alt=""
                            style="width: 50px;"></td>
                    <td>{{ $work->job_name }}</td>
                    <td>{{ $work->company }}</td>
                    <td>{{ $work->email }}</td>
                    <td>{{ $work->salary }}</td>
                    <td>
                        <a href="{{ route('work.detail', $work->id) }}">Details</a>
                        <a href="{{ $work->information }}" target="_blank">See Info</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html> --}}


@extends('layout.admin.master')
@section('content')
    <main class="p-6">
        <div class="grid lg gap-6 mt-8">
            <a href="/admin/scholarship/create" style="width: 20%" class="btn bg-info text-white py-2 px-3">Add
                Job Vacancies</a>
            <div class="card bg-white overflow-hidden">
                <div class="card-header">
                    <h4 class="card-title">Job Table</h4>
                </div>
                <div>

                    <div class="overflow-x-auto">
                        <div class="min-w-full inline-block align-middle">
                            <div class="overflow-hidden">

                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-start text-sm text-gray-500">
                                                Id</th>
                                            <th scope="col" class="px-6 py-3 text-start text-sm text-gray-500">
                                                Image</th>
                                            <th scope="col" class="px-6 py-3 text-start text-sm text-gray-500">
                                                Job Name</th>
                                            <th scope="col" class="px-6 py-3 text-start text-sm text-gray-500">
                                                Company</th>
                                            <th scope="col" class="px-6 py-3 text-start text-sm text-gray-500">Email</th>
                                            <th scope="col" class="px-6 py-3 text-start text-sm text-gray-500">Salary
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-end text-sm text-gray-500">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($works as $work)
                                            <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $work->id }}</td>
                                                <td> <img src="{{ asset('/storage/work-images/' . $work->image) }}"
                                                        alt="" style="width: 100px;"></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $work->job_name }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                    {{ $work->company }}</td>
                                                <td>{{ $work->email }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $work->salary }}</td>

                                                <td>
                                                    <div class="hs-dropdown relative">
                                                        <button type="button"
                                                            class="hs-dropdown-toggle btn bg-primary text-white">
                                                            Action <i class="uil uil-angle-down ms-2"></i>
                                                        </button>

                                                        <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 bg-white shadow py-2 z-10 hidden"
                                                            style="">
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 text-sm text-gray-800 hover:bg-gray-100"
                                                                href="{{ route('work.detail', $work->id) }}">
                                                                Details</a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 text-sm text-gray-800 hover:bg-gray-100"
                                                                href="{{ route('work.edit', $work->id) }}">
                                                                Edit</a>
                                                            <a class="flex items-center gap-x-3.5 py-2 px-3 text-sm text-gray-800 hover:bg-gray-100"
                                                                href="{{ $work->information }}" target="_blank">
                                                                See
                                                                Info</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end card -->
        </div>


    </main>
@endsection
