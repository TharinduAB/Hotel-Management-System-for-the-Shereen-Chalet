<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Housekeeper;
use Illuminate\Http\Request;
use DB;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('housekeepers')
                ->join('tasks','housekeepers.housekeeper_id','=','tasks.housekeeper_id')
                ->select('housekeepers.housekeeper_id','housekeepers.first_Name','housekeepers.contact_Number','housekeepers.gender','tasks.task_id','tasks.status','tasks.room_ID','tasks.description')
                ->get();
        return view('housekeepers.tasklist',compact('data'));
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
        //validation
        $request->validate([
            'room_ID'=>'required',
            'status'=>'required',
            'description'=>'required',
            'housekeeper_id'=>'required'
        ]);

        //create a new task
        Task::create($request->all());

        //redirect the user and send succesfull message
        return redirect()->route('tasks.index')->with('success','A new task added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('housekeepers.taskedit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'room_ID'=>'required',
            'status'=>'required',
            'description'=>'required',
        ]);

        //create a new housekeeper
        $task->update($request->all());

        //redirect the user and send succesfull message
        return redirect()->route('tasks.index')->with('success','A task details updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
       
        //redirect user and display success message
        return redirect()->route('tasks.index')->with('success','A task details deleted successfully');
    }
}
