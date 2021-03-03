<?php

namespace App\Http\Controllers;

use App\ToDo;
use Illuminate\Http\Request;

class TodosController extends Controller {
    
    public function index() {
        $todos = Todo::all();
        return view('todos.index')->with('todos', $todos);
    }
}