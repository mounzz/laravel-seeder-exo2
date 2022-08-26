<?php

namespace App\Http\Controllers;

use App\Models\Compagnies;
use Illuminate\Http\Request;

class CompagniesEdit extends Controller
{
    public function update(Request $request, $id){
        $compagnies = Compagnies::find($id);
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
        return redirect()->back();
    }
}
