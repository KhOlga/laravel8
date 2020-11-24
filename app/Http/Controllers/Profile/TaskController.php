<?php

namespace App\Http\Controllers\Profile;

use App\Models\Task;
use App\Models\TaskStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\CreateTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        $user = $request->user();
        $tasks = Task::where('user_id', $user->id)->get();

        return view('profile.tasks.index', [
            'tasks' => $tasks
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function create(Request $request)
    {
        $user = $request->user();

        return view('profile.tasks.create', [
            'user' => $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateTaskRequest $request)
    {
        $data = $request->validated();
        $user = $request->user();

        if (
            $user->tasks()->insert([
                'title' => $data['title'],
                'description' => $data['description'],
                'user_id' => $user->id,
                'status_id' => TaskStatus::where('slug', 'new')->first()->id, //TODO: use const
                'created_at' => now()
            ]) === true
        ) {
            return redirect()->route('profile.tasks.index')->with([
                'message' => 'NEW task has been created successfully'
            ]);
        }

        return redirect()->route('profile.tasks.index')->with([
            'message' => 'New task has NOT been created'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Task $task
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Task $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Task $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
