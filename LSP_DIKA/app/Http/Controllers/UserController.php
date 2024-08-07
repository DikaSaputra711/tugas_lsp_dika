<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() 
    {
        $user = User::all();
        return view('user.index', compact('user'));
    }

    public function validationAdmin(Request $request,string $id)
    {
        $update = User::find($id);
        // $this->authorize('validationAdmin',[User::class,$update]);
        $update->status = $request->validatorAdmin;
        $update->save();
        return redirect()->back();
    }

}
