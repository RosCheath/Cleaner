<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class CreateUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
//        $user = User::latest()->paginate(10);
        $user = User::with('roles')->where('role', 'User')->latest()->paginate(10);
        $Cleaner = User::with('roles')->where('role', 'Cleaner')->latest()->paginate(10);
        return view('dashboard_layout.pages.create_users.index',compact('user'),[
            'Cleaner' => $Cleaner,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('dashboard_layout.pages.create_users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $this->validate(request(), [
//            'name' => ['required', 'string', 'max:255'],
//            'phone' => ['required', 'string', 'max:20'],
//            'date_of_birth' => ['required'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//            'role' => ['required'],
//            'sex' => ['required'],
//        ]);

        $input = $request->all();
        $image = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/ProfileImage',$image);
        $input['image'] = "$image";
        dd($input);
        User::create($input);
        return redirect()->back()
            ->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(User $user )
    {
        return view('dashboard_layout.pages.create_users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $user)
    {
        $this->validate(request(), [
            'name' => 'required',
            'phone' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required',
            'role' => 'required',
            'sex' => 'required',
        ]);
        $input = $request->all();
            if($request->hasFile('image')){
                $image = $request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('public/ProfileImage',$image);
                $input['image'] = "$image";
            }
        $user->update($input);
        return redirect()->route('users.index')
            ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @param $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()
            ->with('success','User deleted successfully');
    }
}
