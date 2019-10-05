<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Admin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     protected $title;
     protected $postNumber;
    public function __construct($name,$postNumber,$area)
    {
        $this->title = "出品した商品が売れました.";
        $this->name = $name;
        $this->postNumber = $postNumber;
        $this->area = $area;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.admin_mail')
            ->subject($this->title)
            ->with(['postNumber' => $this->postNumber,'area' => $this->area,'name' => $this->name]);
    }
}
