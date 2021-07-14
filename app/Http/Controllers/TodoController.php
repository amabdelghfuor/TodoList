<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    
    public function index()
    {
        $todos =Todo::all()->reverse();
        return view('todo.index')->with('todos',$todos);
    }

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required'
        ]);
        $todo = Todo::create([
            'title'=> $request->title 
        ]);
        return redirect()->back(); 
    }

    public function update(Request $request, $id)
    {
        $todo =Todo::find($id);
        $this->validate($request,[
            'title'=>'required',    
        ]);
        $todo->title = $request->title;
        $todo->save();
        return redirect()->back();
    }

   
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->destroy($id);
        return redirect()->back();
    }
}
