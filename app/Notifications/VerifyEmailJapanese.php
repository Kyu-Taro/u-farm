<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\facades\Lang;

class VerifyEmailJapanese extends Notification
{
    use Queueable;

    public static $toMailCallback;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
                    ->subject(Lang::getFromJson('本登録メール'))
                    ->line(Lang::getFromJson('以下のリンクをクリックして本登録を完了してください。'))
                    ->action(Lang::getFromJson('本登録する'), $this->verificationUrl($notifiable))
                    ->line(Lang::getFromJson('もしこのメールに覚えが無い場合は破棄してください。'));
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

    protected function verificationUrl($notifiable)
    {
        return URL::temporarySignedRoute(
            'verification.verify',Carbon::now()->addMinutes(60),['id' => $notifiable->getKey()]
        );
    }

    public static function toMailUsing($callback)
    {
        static::$toMailCallback = $callback;
    }
}
