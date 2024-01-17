<?php

namespace App\Http\Controllers;


use App\Models\BloodBag;
use Illuminate\Http\Request;


class BloodBagController extends Controller
{
    public function index()
    {
        $bloodBags = BloodBag::all();
        return view('bloodbags', compact('bloodBags'));
    }

    public function edit($id)
    {
        $bloodBag = BloodBag::find($id);
        return view('editbloodbags', compact('bloodBag'));
    }

    public function update(Request $request, $id)
{
    // Validate the request...

    $bloodBag = BloodBag::find($id);

    if ($request->has('add')) {
        // Increment the no_packs value by 1
        $bloodBag->no_packs += $request->input('add');
    } elseif ($request->has('subtract')) {
        // Decrement the no_packs value by 1, but ensure it doesn't go below 0
        $bloodBag->no_packs = $bloodBag->no_packs - $request->input('subtract');
    }

    // Save the changes to the database
    $bloodBag->save();

    // Redirect back to the form with the updated data
    return redirect()->back()->with('success', 'Blood bag updated successfully');
}



}
