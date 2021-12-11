<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Requests\ClientRequest;
use App\Models\Person;
use App\Rules\ZipCodeRule;


class CustomerController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }

    public function confirm(ClientRequest $request)
    {
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

    public function thanks(Request $request)
    {
        $this->validate($request, Person::$rules);
        $form = $request->all();
        Person::create($form);

        if($request -> get('back')) {
            return redirect('/index')->withInput();
        }
        return view('thanks');
    }

    public function find(Request $request)
    {

        $last_name = $request->input('last_name');
        $first_name = $request->input('first_name');
        $email = $request->input('email');
        $created_at = $request->input('created_at');

        $query = Person::query();

        if(!empty($last_name)) {
            $query->where('last_name','LIKE',"%{$last_name}%");
        }

        // if(!empty($first_name)) {
        //     $query->Where('first_name','LIKE',"%{$first_name}%");
        // }

        if(!empty($created_at['from']) && !empty($created_at['until'])) {
            $query->whereBetween("created_at",[$from,$until]);
        }

        if(!empty($email)) {
            $query->where('email','LIKE',"%{$email}%");
        }

        if (!empty($params['gender'])) $query->where('gender', $params['gender']);

        $people = $query->paginate(3);
        return view('find',compact('people','last_name','email'));
    }

    public function delete($id)
    {
        Person::destroy($id);

        return redirect('find');
    }

    // public function seek()
    // {
    //     $items=Person::Paginate(4);

    //     return view('seek',['items'=>$items]);
    // }
}
