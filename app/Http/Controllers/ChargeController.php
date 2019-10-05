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

class ChargeController extends Controller
{
    public function charge(Request $request,$item_id,$user_id)
    {

        $item = Item::find($item_id);
        $user = User::find($user_id);
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

        return back();
    }
}
