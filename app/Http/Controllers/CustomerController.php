<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Requests\ClientRequest;
use App\Models\Person;
use App\Http\Requests\SearchRequest;

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
        $email = $request->input('email');

        $query = Person::query();

        if(!empty($last_name)) {
            $query->where('last_name','LIKE',"%{$last_name}%");
        }

        if(!empty($email)) {
            $query->where('email','LIKE',"%{$email}%");
        }

        $people = $query->paginate(2);
        return view('find',compact('people','last_name','email'));
    }

    public function search(SearchRequest $request)
    {
        // $item = Person::find($request->input);
        // $param = [
        //     'item' => $item,
        //     'input' => $request->input
        // ];
        // return view('find',$param);
        $keyword = $request->input('keyword');
        $query = Person::where('last_name','LIKE',"%{$keyword}%")->get();
        
        return view('find',['query'=>$query]);
    
        // $last_name = $request->input('last_name');
        // $email = $request->input('email');

        // $query = Person::query();

        // if(!empty($last_name)) {
        //     $query->where('last_name','LIKE',"%{$last_name}%");
        // }

        // if(!empty($email)) {
        //     $query->where('email','LIKE',"%{$email}%");
        // }

        // $people = $query->get();

        
        // return view ('find', compact('people','last_name','email'));
    }

    public function seek() {
        // $items=Person::all();
        $items=Person::Paginate(4);
        return view('seek',['items'=>$items]);
    }

    // public function search(Request $request) 
    // {
    //     $item = Person::find($request->input);
    //     $param = [
    //         'item' => $item,
    //         'input' => $request->input
    //     ];
    //     return view('find',$param);
    //    
    // }
    public function bind(Person $person)
    {
        $data = [
            'item'=>$person,
        ];
        return view('person.binds',$data);
    }

    // public function show()
    // {
    //     $item=Person::all();
    //     return view('person.binds',['item'=>$item]);
    // }


}
