<?php

namespace App\Http\Controllers;

use App\Models\Compagnies;
use Illuminate\Http\Request;

class CompagniesController extends Controller
{
    public function home(){
        $compagnies = Compagnies::all();
        return view('home', compact('compagnies'));
    }

    public function store(Request $request){
        $compagnies = new Compagnies;
        $compagnies -> compagnyName = $request -> compagnyName;
        $compagnies -> compagnyAddress = $request -> compagnyAddress;
        $compagnies -> PostalCode = $request -> PostalCode;
        $compagnies -> DoorNumber = $request -> DoorNumber;
        $compagnies -> phoneNumber = $request -> phoneNumber;
        $compagnies -> email = $request -> email;
        $compagnies -> contactName = $request -> contactName;
        $compagnies -> contactFirstName = $request -> contactFirstName;
        $compagnies -> image = $request -> image;
        $compagnies -> save();
        return redirect('/');

    }

    public function destroy($id){
        $destroy = Compagnies::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function show($id){
        $id_show = Compagnies::find($id);
        return view('pages.compagnieEdit', compact('id_show'));
    }

    public function deleteAll(){
        $deleteAll = Compagnies::truncate();
        return redirect("/");
    }
}
