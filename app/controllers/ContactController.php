<?php

class ContactController extends BaseController {

	public function getContact()
	{
		return View::make('contact');
	}

}
