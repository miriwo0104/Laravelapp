<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelloController extends Controller
{
    public function index(Request $request) {
        $items = DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }

    public function post(Request $request){
        {
            $items = DB::select('select * from people');
            return view('hello.index', ['items' => $items]);
        }
    }

    public function add(Request $request){
        return view('hello.add');
    }

    public function create(Request $request){
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        $person = new Person();
        $person->name = $param['name'];
        $person->mail = $param['mail'];
        $person->age = $param['age'];
        $person->save();

//        DB:insert('insert into people (name, mail, age) value (:name, :mail :age)', $param);
        return redirect('/hello');
    }

    public function settings(Request $request) {
        return view('hello.settings');
    }

    public function update() {
        return redirect('/hello');
    }
}

