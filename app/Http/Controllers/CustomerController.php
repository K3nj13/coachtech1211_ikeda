<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Requests\ClientRequest;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function confirm(ClientRequest $request) {
        $last_name = $request -> last_name;
        $first_name = $request -> first_name;
        $gender = $request -> gender;
        $email = $request -> email;
        $postcode = $request -> postcode;
        $address = $request -> address;
        $building_name = $request -> building_name;
        $opinion = $request -> opinion;

        $input_data = [
            'last_name' => $last_name,
            'first_name' => $first_name,
            'gender' => $gender,
            'email' => $email,
            'postcode' => $postcode,
            'address' => $address,
            'building_name' => $building_name,
            'opinion' => $opinion,
        ];

        return view('confirm',$input_data);
    }

    public function thanks(Request $request) {
        if($request -> get('back')) {
            return redirect('/index')->withInput();
        }
        return view('thanks');
    }


}
