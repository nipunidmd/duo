<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Mail;

class MailResetPasswordNotification extends Notification
{
  use Queueable;

  /**
  * Create a new notification instance.
  *
  * @return void
  */
  protected $token;

  public function __construct($token)
  {
    $this->token = $token;
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
    $link = url( "/password/reset/" . $this->token );
    // dd($link);
    // dd($notifiable);
    $data = $notifiable;
    // dd($data);
    return (new MailMessage)
    ->view('email.password-reset',compact('link','data'))
    ->from('info@pharmacy.com','Pharmacy')
    ->subject("Pharmacy | Password reset | ".$notifiable->email);
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
