<div class="flex font-Kumbh items-center justify-between px-20 py-2">
    <h3 class="font-medium text-lg">Students</h3>
    <button class="bg-blue-400 hover:bg-blue-700 text-white font-Kumbh py-2.5 px-6 rounded-lg ml-4">Add Student</button>
</div>

<div class="mx-20 mt-6 font-Kumbh h-fit">
    @if ($students->isEmpty())
        {{-- No Students Found --}}
        <div class="bg-gray-100 flex flex-col items-center justify-center py-9">
            <img src="{{ asset('images/dashboard/nothing-pic.png') }}" alt="No Students Found" class="w-96">
            <p class="text-black text-2xl font-semibold mt-6">No Students At This Time</p>
            <p class="text-black text-lg mt-1">When you add students, you'll see them here.</p>
        </div>
    @else
        {{-- Students List --}}
        <div class="py-4">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="p-4 border-b border-gray-200 text-start">Name</th>
                        <th class="p-4 border-b border-gray-200 text-start">ID</th>
                        <th class="p-4 border-b border-gray-200 text-start">Class</th>
                        <th class="p-4 border-b border-gray-200 text-start">Gender</th>
                        <th class="p-4 border-b border-gray-200 text-start">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr class="{{ $loop->even ? 'bg-blue-100' : '' }}">
                            <td class="p-3 border-b border-gray-200">
                                <img src="{{ asset($student->image_url) }}" alt="Student" class="w-8 h-8 rounded-full inline-block mr-2">
                                {{ $student->name }}
                            </td>
                            <td class="p-3 border-b border-gray-200">{{ $student->student_token }}</td>
                            <td class="p-3 border-b border-gray-200">{{ $student->class->name }}</td>
                            <td class="p-3 border-b border-gray-200">{{ $student->gender }}</td>
                            <td class="p-3 border-b border-gray-200">{{ $student->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>