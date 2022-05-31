<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CleanerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $cleaner = User::with('roles')->where('role', 'Cleaner')->get();
//        $cleaner = User::get();
            return view('dashboard_layout.pages.cleaner.index',compact('cleaner'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('dashboard_layout.pages.cleaner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:20'],
            'date_of_birth' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'id_card' => ['required'],
            'role' => ['required'],
            'sex' => ['required'],
        ]);

//        $input = $request->all();
        $input = [
            'name' => $request['name'],
            'phone' => $request['phone'],
            'date_of_birth' => $request['date_of_birth'],
            'image'=> $request['image'],
            'email' => $request['email'],
            'id_card' => $request['id_card'],
            'sex' => $request['sex'],
            'role' => $request['role'],
            'password' => Hash::make($request['password']),
        ];
        User::create($input);
        return redirect()->back()
            ->with('success','Cleaner created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $cleaner)
    {

        return view('dashboard_layout.pages.cleaner.edit',compact('cleaner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $cleaner)
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
        dd($input);
            $cleaner->update($input);

        return redirect()->back()
            ->with('success','Cleaner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $cleaner)
    {
        $cleaner->delete();
        return redirect()->back()
            ->with('success','Cleaner deleted successfully');
    }
}
