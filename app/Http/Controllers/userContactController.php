<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class userContactController extends Controller
{
    public function contacts(Request $request)
    {
        $contacts = New Contact();
        $contacts->to = 'Admin@gmail.com';
        $contacts->name = $request->get('name');
        $contacts->email = $request->get('email');
        $contacts->telegram = $request->get('telegram');
        $contacts->message = $request->get('message');
        $contacts->save();

        return redirect()->back();

    }
}
