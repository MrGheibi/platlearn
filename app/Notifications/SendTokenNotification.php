<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendTokenNotification extends Notification
{
    use Queueable;
    private $authToken = [];

    /**
     * Create a new notification instance.
     *
     * @param $authToken
     */
    public function __construct($authToken)
    {
        $this->authToken = $authToken;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'  ];
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
            ->subject('اهراز هویت پلت لرن')
                    ->line('برای ورود به پنل مدیریت روی لینک زیر کلیک کنید 👇')
                    ->action('ورود به پنل', url(env('app_admin').'?tokenAdmin=' . $this->authToken['token'] .
                        '&tokenType=' . $this->authToken['token_type'] .
                        '&status=' . $this->authToken['status']));
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
