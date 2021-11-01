<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{

    public function index()
    {

        return view('crud.show');

    }

    public function insert()
    {

        return view('crud.insert');

    }

}
