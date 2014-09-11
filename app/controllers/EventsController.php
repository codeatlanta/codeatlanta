<?php

class EventsController extends BaseController {

	public function getEvents()
	{
		return View::make('events');
	}
}
