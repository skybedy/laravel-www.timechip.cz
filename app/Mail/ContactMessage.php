<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Emailová adresa uživatele.
     *
     * @var string|null
     */
    protected $user;

    /**
     * Obsah emailové zprávy.
     *
     * @var string|null
     */
    protected $message;
    
    
    
    
    
    
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $user, string $message)
    {
        $this->user = $user;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): ContactMessage
    {
        return $this->markdown('emails.contact', [
            'message' => $this->message,
        ])->subject('Email z kontaktního formuláře')->from($this->user);
    }
}
