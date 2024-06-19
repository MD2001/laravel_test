<x-layout>
    <x-slot:heading>
        Jobs page
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{ $job['id'] }}" class="text-blue-500">
                    <strong>{{ $job['title'] }}:</strong> and the salary per year is :{{ $job['salary'] }} </a>
            </li>
        @endforeach
    </ul>

</x-layout>
