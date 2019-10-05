<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Me extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     protected $title;
     protected $userName;
     protected $userNumber;
     protected $userPostNumber;
     protected $userArea;
     protected $itemName;
     protected $itemPrice;
    //  protected $adminName;
    //  protected $adminPostNumber;
    //  protected $adminArea;
    //  protected $adminNumber;
    //  protected $bankName;
    //  protected $bankAdminName;
    //  protected $bankBranch;
    //  protected $bankType;
    //  protected $bankNumber;

    public function __construct($userName,$userNumber,$userPostNumber,$userArea,$itemName,$itemPrice)
    {
        $this->title = '購入情報通知';
        $this->userName = $userName;
        $this->userNumber = $userNumber;
        $this->userPostNumber = $userPostNumber;
        $this->userArea = $userArea;
        $this->itemName = $itemName;
        $this->itemPrice = $itemPrice;
        // $this->adminName = $adminName;
        // $this->adminPostNumber = $adminPostNumber;
        // $this->adminArea = $adminArea;
        // $this->adminNumber = $adminNumber;
        // $this->bankName = $bankName;
        // $this->bankAdminName = $bankAdminName;
        // $this->bankBranch = $bankBranch;
        // $this->bankType = $bankType;
        // $this->bankNumber = $bankNumber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.me_mail')
            ->subject($this->title)
            ->with(
                [
                    'userName' => $this->userName,
                    'userNumber' => $this->userNumber,
                    'userPostNumber' => $this->userPostNumber,
                    'userArea' => $this->userArea,
                    'itemName' => $this->itemName,
                    'itemPrice' => $this->itemPrice,
                    // 'adminName' => $this->adminName,
                    // 'adminPostNumber' => $this->adminPostNumber,
                    // 'adminArea' => $this->adminArea,
                    // 'adminNumber' => $this->adminNumber,
                    // 'bankName' => $this->bankName,
                    // 'bankAdminName' => $this->bankAdminName,
                    // 'bankBranch' => $this->bankBranch,
                    // 'bankType' => $this->bankType,
                    // 'bankNumber' => $this->bankNumber
                ]
            );
    }
}
