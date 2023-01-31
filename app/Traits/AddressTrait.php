<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait AddressTrait
{
    public function storeAddress(Request $request, $object)
    {
        $current_user = Auth::user();

        $address = $object->address  ?? new Address;
        $address->flat_no = $request->input('flat_no');
        $address->line_1 = $request->input('line_1');
        $address->line_2 = $request->input('line_2');
        $address->city = $request->input('city');
        $address->state = $request->input('state');
        $address->pincode = $request->input('pincode');
        $address->created_by = $current_user->id;
        $address->updated_by = $current_user->id;

        $object->address()->save($address);
    }
}