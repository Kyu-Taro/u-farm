<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\Item;
use App\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\Admin;
use App\Mail\User as Users;
use App\Mail\Me;

class ChargeController extends Controller
{
    public function charge(Request $request,$item_id,$user_id)
    {

        $item = Item::find($item_id);
        $user = User::find($user_id);
        $id = $item->admin()->id;
        $admin = Admin::find($id);

        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));

            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $item->price,
                'currency' => 'jpy'
            ));

        } catch (\Exception $ex) {
            return $ex->getMessage();
        }

        $to = $item->admin->email;
        $postNumber = $user->postNumber;
        $area = $user->area;
        $name = $user->name;
        $itemName = $item->name;
        $price = $item->price;
        Mail::to($to)->send(new Admin($name,$postNumber,$area,$itemName,$price));

        $to = $user->email;
        $name = $item->name;
        $price = $item->price;
        $adminName = $item->admin->name;
        $adminNumber = $item->admin->tell;
        Mail::to($to)->send(new Users($name,$price,$adminName,$adminNumber));

        $to = 'amiti999@icloud.com';
        $userName = $user->naem;
        $userNumber = $user->tell;
        $userPostNumber = $user->postNumber;
        $userArea = $user->area;
        $itemName = $item->name;
        $itemPrice = $item->price;
        $adminName = $item->admin->name;
        $adminPostNumber = $item->admin->postNumber;
        $adminArea = $item->admin->area;
        $bankName = $admin->account->bank;
        $bankAdminName = $admin->account->name;
        $bankBranch = $admin->account->branch;
        $bankType = $admin->account->type;
        $bankNumber = $admin->account->bankNumber;
        Mail::to($to)->send(new Me($userName,$userNumber,$userPostNumber,$userArea,$itemName,$itemPrice,$adminName,$adminPostNumber,$adminArea,$bankName,$bankAdminName,$bankBranch,$bankType,$bankNumber));

        return back();
    }
}
