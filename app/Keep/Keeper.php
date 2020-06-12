<?php

namespace App\Keep;

use Illuminate\Http\Request;

interface Keeper
{
    public function save(Request $request);
}
