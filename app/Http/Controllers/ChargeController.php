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
use App\Admin as Admins;
use App\Client;

class ChargeController extends Controller
{
    public function charge(Request $request,$item_id,$user_id,$price)
    {

        $item = Item::find($item_id);
        $user = User::find($user_id);
        $id = $item->admin_id;
        $admin = Admins::find($id);
        $number = $request->input('number');


        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));

            $charge = Charge::create(array(
                'customer' => $customer->id,
                'amount' => $price,
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
        Mail::to($to)->send(new Admin($name,$postNumber,$area,$itemName,$price,$number));

        $to = $user->email;
        $name = $item->name;
        $adminName = $item->admin->name;
        $adminNumber = $item->admin->tell;
        Mail::to($to)->send(new Users($name,$price,$adminName,$adminNumber,$number));

        $to = 'amiti9999@icloud.com';
        $userName = $user->name;
        $userNumber = $user->tell;
        $userPostNumber = $user->postNumber;
        $userArea = $user->area;
        $itemName = $item->name;
        $itemPrice = $price;
        $adminName = $item->admin->name;
        $adminPostNumber = $item->admin->postNumber;
        $adminArea = $item->admin->area;
        $adminNumber = $item->admin->tell;
        $bankName = $admin->account->name;
        $bankAdminName = $admin->account->bank;
        $bankBranch = $admin->account->branch;
        $bankType = $admin->account->type;
        $bankNumber = $admin->account->number;
        Mail::to($to)->send(new Me($userName,$userNumber,$userPostNumber,$userArea,$itemName,$itemPrice,$adminName,$adminPostNumber,$adminArea,$adminNumber,$bankName,$bankAdminName,$bankBranch,$bankType,$bankNumber,$number));

        $client = new Client;
        $client->user_id = $user->id;
        $client->admin_id = $admin->id;
        $client->item_id = $item->id;
        $client->number = $number;
        $client->save();

        $data = [
            'name' => $name,
            'number' => $number,
            'price' => $price
        ];

        return redirect()->route('buy')->with($data);
    }
}
