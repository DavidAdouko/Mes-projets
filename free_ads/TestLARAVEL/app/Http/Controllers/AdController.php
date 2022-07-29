<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\AdStore;
use App\Models\Ad;

class AdController extends Controller
{
    public function create()
    {
        return view('create'); 
    }

    public function store(AdStore $request)
    {
        $validated = $request->validated();
        
        $ad = new Ad();
        $ad->title = $validated['title'];
        $ad->description = $validated['description'];
        $ad->localisation = $validated['localisation'];
        $ad->price = $validated['price'];
        $ad->user_id = auth()->user()->id;

        $ad->save();

        return redirect()->route('welcome')->with('success','Votre annonce a été postée.');

    }
}
