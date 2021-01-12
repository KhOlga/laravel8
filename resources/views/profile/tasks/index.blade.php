<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks list') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="tasks-list">
                    <div class="item">
                        <span>Id</span>
                        <span>Title</span>
                        <span>Description</span>
                        <span>Your ID</span>
                        <span>Task status</span>
                        <span>Creation date</span>
                    </div>
                    @foreach($tasks as $task)
                        <div class="item">
                            {{ $task->id }} {{ $task->title }} {{ $task->description }} {{ $task->user_id }} @if($task->status_id === 1){{$task->status->name}}@endif {{ $task->created_at }}
                        </div>
                        {{--<p class="item">{{ $task->id }} {{ $task->title }} {{ $task->description }} {{ $task->user_id }} {{ $task->status_id }} {{ $task->created_at }} </p>--}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
