<?php

namespace App\Notifications;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContactFormMessage extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
     
    protected $message;
     
    public function __construct(contactFormRequest $message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
	 {
  		return (new MailMessage)
        ->subject("Fondazione Ikaros Bar, ti è arrivato un nuovo messaggio!")
        ->greeting(" ")
        ->salutation(" ")
        ->from($this->message->email, $this->message->name)
        ->line($this->message->name)
        ->line($this->message->email)
        ->line($this->message->location)
        ->line($this->message->number)
        ->line($this->message->subject)
        ->line($this->message->message);    	
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
