<x-layout>
    <h1>{{ $job->title }}</h1>

    <p>Salary: {{ $job->salary }}</p>
    <p>Description: {{ $job->description }}</p>

    <br>

    <a href="/jobs">Back to job list</a>
</x-layout>