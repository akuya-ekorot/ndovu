<x-layout>
    @foreach ($tasks as $task)
        <p>{{ $task->title }}</p>
    @endforeach
</x-layout>
