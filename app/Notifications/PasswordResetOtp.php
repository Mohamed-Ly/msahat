<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PasswordResetOtp extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $otp;

    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('رمز التحقق لإستعادة كلمة السر')
                    ->line('لقد تلقيت هذا البريد الإلكتروني لأننا تلقينا طلب إعادة تعيين كلمة المرور لحسابك.')
                    ->line('رمز التحقق: ' . $this->otp)
                    ->line('سينتهي صلاحية رمز التحقق هذا في غضون 3 دقائق.')
                    ->line('إذا لم تطلب إعادة تعيين كلمة المرور، فلن تكون هناك حاجة إلى أي إجراء آخر.');
    }


}
