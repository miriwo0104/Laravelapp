<?php

namespace App\Http\Controllers;

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
            $validate_true = [
                'name' => 'required',
                'mail' => 'email',
                'age' => 'numeric|between:0,150',
            ];
            $this->validate($request, $validate_true);
            return view('hello.index', ['msg'=>'正しく入力されました！']);
        }
    }
}
