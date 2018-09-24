<?php

namespace App\Http\Controllers;

use Session;
use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
    	$todos = Todo::all();

    	return view('todos')->with('todos',$todos);
    }
    public function store(Request $request)
    {
    	# dd($request->all()); use for die and print request data from FORM.

    	$todo = new Todo;

    	$todo->todo = $request->todo;
    	$todo->save();

    	Session::flash('success','Your todo is successfully created.');
    	return redirect()->back();
    }


    public function delete($id)
    {
    	// dd($id);

    	$todo = Todo::find($id);
    	$todo->delete();

    	Session::flash('success','Your todo is successfully deleted.');
    	return redirect()->back();
    }

    public function update($id)
    {
    	$todo = Todo::find($id);

    	return view('update')->with('todo',$todo);
    }

    public function save(Request $request,$id)
    {
    	$todo = Todo::find($id);
    	$todo->todo = $request->todo;

    	$todo->save();
    	Session::flash('success','Your todo is successfully updated.');
    	return redirect()->route('todos');
    }

    public function completed($id)
    {
    	$todo = Todo::find($id);
    	$todo->completed = 1;
    	$todo->save();

    	Session::flash('success','Your todo is successfully Mark as completed.');
    	return redirect()->back();
    }

}
