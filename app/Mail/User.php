<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class User extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     protected $title;
     protected $name;
     protected $price;
     protected $adminName;
     protected $adminNumber;

    public function __construct($name,$price,$adminName,$adminNumber)
    {
        $this->title = '商品の購入が完了しました';
        $this->name = $name;
        $this->price = $price;
        $this->adminName = $adminName;
        $this->adminNumber = $adminNumber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.user_mail')
            ->from('gtnine999@gmail.com')
            ->subject($this->title)
            ->with(['name' => $this->name,'price' => $this->price,'adminName' => $this->adminName,'adminNumber' => $this->adminNumber]);
    }
}
