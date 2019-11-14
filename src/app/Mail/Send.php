<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Send extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     protected $title;
     protected $name;
     protected $adminName;
     protected $adminNumber;
    public function __construct($name,$adminName,$adminNumber)
    {
        $this->title = '商品が発送されました。';
        $this->name = $name;
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
        return $this->view('mail.send_mail')
            ->from('gtnine999@gmail.com','U-farm')
            ->subject($this->title)
            ->with(['name' => $this->name,'adminName' => $this->adminName,'adminNumber' => $this->adminNumber]);
    }
}
