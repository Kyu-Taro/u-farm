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
     protected $name;
     protected $area;
     protected $itemName;
     protected $price;
     
    public function __construct($name,$postNumber,$area,$itemName,$price)
    {
        $this->title = "出品した商品が購入されました";
        $this->name = $name;
        $this->postNumber = $postNumber;
        $this->area = $area;
        $this->itemName = $itemName;
        $this->price = $price;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.admin_mail')
            ->from('gtnine999@gmail.com','U-farm')
            ->subject($this->title)
            ->with(['postNumber' => $this->postNumber,'area' => $this->area,'name' => $this->name,'itemName' => $this->itemName,'price' => $this->price]);
    }
}
