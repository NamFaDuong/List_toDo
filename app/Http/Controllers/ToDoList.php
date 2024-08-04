<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\ToDoList as ModelsToDoList;
use Illuminate\Http\Request;

class ToDoList extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users=Account::all();
        return view('Do.index',compact('users'));
        // return "Hello";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accounts=Account::all();
        return view('Do.create',compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        \App\Models\ToDoList::create([
            'Title'=>$request->input('title'),
            'Description'=>$request->input('description'),
            'Userid'=>$request->input('us'),
        ]);
        $dolist=ModelsToDoList::all();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $id=request()->id;
        $dolist=ModelsToDoList::where('Userid','=',$id)->get();
        return view('Do.show',compact('dolist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dolist=\App\Models\ToDoList::find($id);
        return view("Do.edit",["dolist"=>$dolist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $todo=ModelsToDoList::find($id);
        $todo->Title=$request->title;
        $todo->Description=$request->description;
        $todo->save();

        return redirect("/ToDo");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ModelsToDoList::destroy($id);
        $dolist=ModelsToDoList::all();
        return view('Do.index',compact('dolist'));
    }
}
