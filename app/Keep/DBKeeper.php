<?php

namespace App\Keep;
 
use App\Lead;
use Illuminate\Http\Request;
 
Class DBKeeper implements Keeper
{
    public function save(Request $request)
    {
        $lead = Lead::create($request->validate([
            'name' => ['required'],
            'phone' => ['required', 'regex:/^[78][0-9]{10}$/'],
            'message' => ['required']
        ]));
        return response($lead, 201);
    }
}
