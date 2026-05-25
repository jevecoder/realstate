<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // sample list
    public function index()
    {
        return view('properties.index');
    }

    // property details page
    public function show($id)
    {
        return view('properties.show', [
            'id' => $id
        ]);
    }
}
