<?php

namespace App\Http\Controllers;
use App\Models\ToDoList;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $toDoLists = ToDoList::all();
        return view('toDoList.index', compact('toDoLists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        ToDoList::create([

            'title' => $request->input('title'),
            'completed' => false,

        ]);

        return redirect('/toDoLists')->with('success', "Tarefa criada com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([

            'title' => 'required|string|max:255',
            'completed' => 'required|boolean',

        ]);

        $toDoList->update([

            'title' => $request->input('title'),
            'completed' => $request->input('completed'),

        ]);

        return redirect('/toDoLists')->with('success', 'Tarefa atualizada com sucesso');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $toDoList->delete();
        return redirect('/toDoLists')->with('success', 'Tarefa excluída com sucesso!');
    }

}