<div class="flex font-Kumbh items-center justify-between px-20 py-2">
    <h3 class="font-medium text-lg">Teachers</h3>
    <button class="bg-blue-400 hover:bg-blue-700 text-white font-Kumbh py-2.5 px-6 rounded-lg ml-4">Add Teacher</button>
</div>

<div class="mx-20 mt-6 font-Kumbh h-fit">
    @if ($teachers->isEmpty())
        {{-- No Teacher Found --}}
        <div class="flex flex-col items-center justify-center py-9 bg-gray-100">
            <img src="{{ asset('images/dashboard/nothing-pic.png') }}" alt="No Teachers Found" class="w-96">
            <p class="text-black text-2xl font-semibold mt-6">No Teacher At This Time</p>
            <p class="text-black text-lg mt-1">When you add teachers, you'll see them here.</p>
        </div>
    @else
        {{-- Teachers List --}}
        <div class="py-4">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="p-4 border-b border-gray-200 text-start">Name</th>
                        <th class="p-4 border-b border-gray-200 text-start">Subject</th>
                        <th class="p-4 border-b border-gray-200 text-start">Email</th>
                        <th class="p-4 border-b border-gray-200 text-start">Gender</th>
                        <th class="p-4 border-b border-gray-200 text-start">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teachers as $teacher)
                        <tr class="{{ $loop->even ? 'bg-blue-100' : '' }}">
                            <td class="p-3 border-b border-gray-200">
                                <img src="{{ asset($teacher->image_url) }}" alt="Teacher" class="w-8 h-8 rounded-full inline-block mr-2">
                                {{ $teacher->name }}
                            </td>
                            <td class="p-3 border-b border-gray-200">{{ $teacher->subject->name }}</td>
                            <td class="p-3 border-b border-gray-200">{{ $teacher->email }}</td>
                            <td class="p-3 border-b border-gray-200">{{ $teacher->gender }}</td>
                            <td class="p-3 border-b border-gray-200">{{ $teacher->phone }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>