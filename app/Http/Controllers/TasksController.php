<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Models\Task;
    use App\Http\Requests\createTaskRequest;

    class TasksController extends Controller {

        public function index() {
            $tasks = Task::all();

            return view('tasks', ['tasks' => $tasks]);
        }

        public function create() {
            return view('create');
        }

        public function store(createTaskRequest $request) {
            Task::create($request->all());

            return redirect()->route('tasks.index');
        }

        public function edit($id) {
            $task = Task::find($id);

            return view('edit', ['task' => $task]);
        }

        public function update(Request $request, $id) {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
            ]);
            $task = Task::find($id);
            $task->fill($request->all());
            $task->save();

            return redirect()->route('tasks.index');
        }

        public function show($id) {
            $task = Task::find($id);

            return view('show', ['task' => $task]);
        }

        public function delete($id) {
            Task::find($id)->delete();

            return redirect()->route('tasks.index');
        }
    }
