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
        return view('contact.show',[
            'currentRegistrations' => $homeRepositoryInterface->getCurrentRegistration(),
        ]);
    }

    public function send(Request $request)
    {
        
        $validated = $request->validate([
                'email' => 'required|email',
                'message' => 'required|string',
                'captcha' => ['required', function ($attribute, $value, $fail) {
                    if (trim($value) !== '118') {
                        $fail('Kontrolní otázka je nesprávně zodpovězena.');
                    }
                }],
            ]);



        Mail::to('info@timechip.cz')->send(new ContactMessage($validated['email'], $validated['message']));

        return redirect()->route('contact.show')->with('success', 'Zpráva byla úspěšně odeslána. Děkujeme!');
    }

}
