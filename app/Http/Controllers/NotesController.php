<?php

namespace App\Http\Controllers;

use App\Note;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Matcher\Not;

class NotesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     */
    public function store(Request $request, Task $task)
    {
        $this->validate($request,[
            'body' => 'required|min:10',
        ]);

        $note = new Note($request->all());
        $note->by(Auth::user());

        $task->addNote($note);

        return back();
    }

    public function edit(Note $note)
    {
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        $note->update($request->all());

        return back();
    }
}
