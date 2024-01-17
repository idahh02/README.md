<?php

namespace App\Http\Controllers;
use App\Models\bloodBag;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UpdateBloodController extends Controller
{
    public function index()
    {
         $bloodBag = DB ::table('blood_bags')
        ->orderBy('expiryDate','asc')
        ->get();

        return view('bloodtest',['bloodBags'=>$bloodBag]);
    }

    public function create()
    {
        return view('updateform');
    }

    public function store(Request $request)
    {
        $bloodBag= new BloodBag();
        $bloodBag->bagID=$request->bagID;
        $bloodBag->blood_type=$request->blood_type;
        $bloodBag->donationDate=$request->donationDate;
        $bloodBag->expiryDate=$request->expiryDate;
        $bloodBag->test_result=$request->test_result;
        $bloodBag->notes=$request->notes;
        $bloodBag->created_at=today();
        $bloodBag->updated_at=today();
        $bloodBag->save();
        return redirect('bloodtest');
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {

    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {
        $blood = DB::table('blood_bags')->where('id', $id)->delete();
        return redirect('bloodtest');
    }
}
