<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactsStoreRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index() {
        return view('contact');
    }
    // function contactSubmit(Request $request) {
    //     // $request = new Request(); //dont use this way
    //     // dd($request->all());
    //     // echo $request->name;
    //     // echo $request->email;
    //     // dd(request());
    //     // $request = request();//call request
    //     // $request->name;
    //     // echo $request->input('name');

    //     $request->validate(
    //         [//rules
    //             // 'name' => 'required|max:20|min:2',
    //             'name' => ['required','max:20','min:2'],
    //             'email' => 'required|email',
    //         ],//custom messages
    //         [
    //             'name.required' => 'Please fill the name field',
    //             'name.max' => 'The max length of name is 20',
    //             'name.min' => 'The min length of name is 2',
    //             'email.required' => 'Please fill the email field',
    //         ]
    // );
    //     dd($request->all());
    // }


    function contactSubmit(ContactsStoreRequest $request) {//way two to custom Request class and message on it

        // dd($request->all());
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        dd("saved");

    }
}
