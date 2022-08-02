<?php

namespace App\Http\Controllers;

use App\Sheet;
use Illuminate\Http\Request;

class SheetController extends Controller
{
    public function store(Request $request)
    {
        $request->all();

        Sheet::create($request->all());

        return redirect('/sender')
            ->with('success','Task created successfully.');

    }

}
