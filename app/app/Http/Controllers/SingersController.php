<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\Request;

class SingersController extends Controller
{
    public function index()
    {
        return Singer::get()->toJson(JSON_PRETTY_PRINT);
    }

    public function get(int $singerId)
    {
        return Singer::find($singerId)?->toJson(JSON_PRETTY_PRINT);
    }

    public function store(Request $request)
    {
        return Singer::create($request->all())?->toJson(JSON_PRETTY_PRINT);
    }

    public function update(Request $request, int $singerId)
    {
        $singer = Singer::find($singerId);
        $singer->update($request->all());
        return $singer->toJson(JSON_PRETTY_PRINT);
    }

    public function destroy(int $singerId)
    {
        return Singer::find($singerId)->delete();
    }
}
