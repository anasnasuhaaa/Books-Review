<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $user_id = Auth::id();
        $detail_profile = Profile::where("users_id", $user_id)->first();
        return view('admin.profile.tampil', ['detail_profile' => $detail_profile]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'umur' => 'required',
            'alamat' => 'required',
            'bio' => 'required'
        ]);

        $profile = Profile::find($id);
        $profile->umur = $request->umur;
        $profile->alamat = $request->alamat;
        $profile->bio = $request->bio;
        $profile->save();

        return redirect('/profile');
    }
}
