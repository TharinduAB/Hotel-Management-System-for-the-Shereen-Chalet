<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events=Event :: latest()->paginate(5);

        return view('events.index',compact('events'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input
        $request->validate([
            'title'=>'required',
            'fname' =>'required',
            'contact' =>'required'
        ]);
     
        //create a new product

        Event::create($request->all());


        //rediret the user and send friendly message
        return redirect() ->route('events.index')->with('success','Event Created Successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //validate the input
        $request->validate([
            'fname' =>'required',
                'contact' =>'required',
                
            ]);
         
            //create a new product
    
            $event->update($request->all());
    
    
            //rediret the user and send friendly message
            return redirect() ->route('events.index')->with('success','Event Updated Successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //delete the event
        $event->delete();

        //redirect the user and display success message
        return redirect() ->route('events.index')->with('success','Event Cancelled and Deleted Successfully !');



    }
}
