<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('todos.index', compact('todos'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
        ]);

        Todo::create($validatedData);

        return redirect('/todos');
    }

    public function update(Request $request, Todo $todo)
    {
        $todo->update(['completed' => $request->has('completed')]);
        return redirect('/todos');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('/todos');
    }
}
