<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
    	$contact = new Contact();

		$arr = [
			'message' => $req->input('message'),
			'name' => $req->input('name'),
			'email' => $req->input('email'),
			'subject' => $req->input('subject'),
		];

    	$contact->message = $req->input('message');
    	$contact->name    = $req->input('name');
    	$contact->email   = $req->input('email');
		$contact->subject = $req->input('subject');
		// $contact->dick = $req->input('subject');

		try{
			$contact->save();
		}
		catch(Exception $ex)
		{
			dd($ex);
		}
		// return view('admin.messages');
		// dd($contact);
		// echo "asdasd";
		return view('home');
    	
	}
	
	public function saveArticle(){
		//todo
		
	}
}
