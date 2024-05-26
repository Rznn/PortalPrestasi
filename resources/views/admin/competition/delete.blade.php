@extends('layout.admin.master')
@section('title', 'Competition Deleted List')
@section('content')
    <main class="p-6">
        <div class="grid lg gap-6 mt-1">
            <a href="/admin/competition/index" style="width: 20%" class="btn bg-secondary text-white py-1 px-3">
                <i class="uil uil-arrow-left text-xl me-2"></i>
                Back
            </a>

            <div class="card bg-white overflow-hidden">
                <div class="card-header">
                    <h4 class="card-title">Competition Table</h4>
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
                                                Name</th>
                                            <th scope="col" class="px-6 py-3 text-start text-sm text-gray-500">
                                                Organizer</th>
                                            <th scope="col" class="px-6 py-3 text-start text-sm text-gray-500">End
                                                Registration</th>
                                            <th scope="col" class="px-6 py-3 text-start text-sm text-gray-500">Start
                                                Competition</th>
                                            <th scope="col" class="px-6 py-3 text-start text-sm text-gray-500">Status
                                            </th>
                                            <th scope="col" class="px-6 py-3 text-end text-sm text-gray-500">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($competitions as $competition)
                                            <tr class="odd:bg-white even:bg-gray-100 hover:bg-gray-100">
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $competition->id }}</td>
                                                <td> <img
                                                        src="{{ asset('/storage/competition-images/' . $competition->image) }}"
                                                        alt="" style="width: 100px;"></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $competition->name }}
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                                    {{ $competition->organizer }}</td>
                                                <td>{{ $competition->end_registration }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $competition->start_competition }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                                    {{ $competition->status }}</td>
                                                <td>
                                                    <a type="button"
                                                        class="hs-dropdown-toggle btn bg-primary text-white text-xs"
                                                        href="{{ route('competition.restore', $competition->id) }}">
                                                        Restore
                                                    </a>
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
