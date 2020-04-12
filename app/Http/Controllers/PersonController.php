<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
   public function index() {
       $items = Person::all();
       return view('person.index', ['items' => $items]);
   }
}
