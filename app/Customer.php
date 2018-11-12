<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function saveCustomerInfo($customer, $request) {
        $customer->first_name       = $request->first_name;
        $customer->last_name        = $request->last_name;
        $customer->email_address    = $request->email_address;
        $customer->password         = bcrypt($request->password);
        $customer->phone_number     = $request->phone_number;
        $customer->address          = $request->address;
        $customer->save();
        return $customer;
    }
}
