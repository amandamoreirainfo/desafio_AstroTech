<?php

namespace App\Http\Controllers;
use App\Models\ToDoListModel;
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
        $toDoLists = ToDoListModel::all();
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

        ToDoListModel::create([

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
        $toDoList = ToDoListModel::find($id);
        return view('toDoList.edit', compact('toDoList'));
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

        $toDoList = ToDoListModel::find($id);
        $toDoList->title = $request->input('title');
        $toDoList->save();
    
        return redirect('/toDoLists')->with('success', 'Item atualizado com sucesso!');
    
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
        $toDoList = ToDoListModel::find($id);

        if($toDoList){

            $toDoList->delete();
            return redirect('/toDoLists')->with('success', "Tarefa excluída com sucesso! ");
            }else{

            return redirect('/toDoLists')->with('error', 'Tarefa não encontrada!');
    
        }
    
    }

}
