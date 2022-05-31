<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $profile = User::get();
        return view('profile.v_profile',compact('profile'));
    }
    public function edit(User $profile)
    {
        return view('profile.edit_profile',compact('profile'));
    }
    public function update(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'phone' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
//            'id_card' => ['required'],
            'role' => 'required',
            'sex' => 'required',
        ]);
        $input = $request->all();
//        dd($input);
        Auth()->user()->update($input);

        return redirect()->back()
            ->with('success','Profile updated successfully');
    }
}
