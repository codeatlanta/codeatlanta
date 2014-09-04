<?php

class ContactController extends BaseController {

	public function getContact()
	{
		return View::make('contact')
            ->with('name', '')
            ->with('email', '')
            ->with('note', '')
            ->with('error', '');
	}

    public function getContactThankYou()
    {
        return View::make('contactty');
    }

    public function postContact()
    {
        $name = Input::get('name', NULL);
        $email = Input::get('email', NULL);
        $note = Input::get('note', NULL);

        if(empty($name) || empty($email) || empty($note)) {
            return View::make('contact')
                ->with('name', $name)
                ->with('email', $emal)
                ->with('note', $note)
                ->with('error', 'Please enter all required fields.');
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return View::make('contact')
                ->with('name', $name)
                ->with('email', $emal)
                ->with('note', $note)
                ->with('error', 'That is not a valid email address. Please enter a valid email address.');
        }

        Contact::create(array(
            'name' => $name,
            'email' => $email,
            'note' => $note,
            'contacted' => NULL
        ));

        return Redirect::to('/contact/thank-you');
    }
}
