<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class Messages extends Controller
{
    public function showMessages(Request $request){
        $contacts = Contact::all();

        // dd($contacts);
		return view('admin.messages', ['contacts' => $contacts]);
    }
}
