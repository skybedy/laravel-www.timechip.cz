<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;
use Illuminate\Http\RedirectResponse;
use App\Interfaces\HomeRepositoryInterface;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(HomeRepositoryInterface $homeRepositoryInterface): View
    {
       // echo "kokok";
        
        return view('contact.show',[
            'currentRegistrations' => $homeRepositoryInterface->getCurrentRegistration(),
        ]);
    }

    public function send(ContactRequest $request): RedirectResponse
    {
        //echo "ůkoko";
        Mail::to(env('MAIL_TO'))->send(new ContactMessage($request->input('email'), $request->input('message')));

        return redirect()->route('contact.show');
    }

}
