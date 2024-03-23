<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::where('user_id', auth()->user()->id)->get();

        dd($todos);
        return view('todo.index');
    }


    public function create()
    {
        return view('todo.create');
    }


    public function edit()
    {
        return view('todo.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
