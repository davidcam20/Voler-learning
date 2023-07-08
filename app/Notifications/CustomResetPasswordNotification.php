<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class CustomResetPasswordNotification extends Notification
{
    use Queueable;

    /**
     * Password reset token
     * @var string
     */
    public $token;


    public function __construct($token){
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
        return (new MailMessage)
            ->subject('Recuperar Contraseña Voler Learning')
            ->greeting('Hola ' . $notifiable->name)
            ->line('Has recibido este correo porque se solicitó un reestablecimiento de contraseña para tu cuenta.')
            ->action('Reestablecer contraseña', url(config('app.url').route('password.reset', $this->token, false)))
            ->line('Si no has realizado esta solicitud,  ignora este correo, no se requiere ninguna otra acción.')
            ->salutation('Saludos, ' . config('app.name'));
    }

}
