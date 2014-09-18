<?php

class EventsController extends BaseController {

    public function index()
    {
        $events = DB::table('event')->where('event_datetime', '>=', date('Y-m-d'))->get();
        return View::make('events.index', compact('events'));
    }

	public function show($id)
	{
        $event = Events::findOrFail($id);
		return View::make('events.show', compact('event'));
	}
    
    public function create()
    {
        $event = new Events();
        return View::make('events.create', compact('event'));
    }
    
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Events::$rules);

        if($validation->passes())
        {
            Events::create($input);
            return Redirect::route('events.admin');
        }
        
        return Redirect::route('events.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'Please resolve the validation issues');
    }

    public function edit($id)
    {
        $event = Events::findOrFail($id);
		return View::make('events.edit', compact('event'));
    }

    public function update($id)
    {
        $event = Events::findOrFail($id);
        $input = Input::all();
        $validation = Validator::make($input, Events::$rules);

        if($validation->passes())
        {
            $event->update($input);
            return Redirect::route('events.admin');
        }
        
        return Redirect::route('events.edit')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'Please resolve the validation issues');
    }

    public function destroy($id)
    {
        $event = Events::findOrFail($id)->delete();
        return Redirect::route('events.admin');
    }

    public function admin()
    {
        $events = Events::all();
        return View::make('events.admin', compact('events'));
    }
}
