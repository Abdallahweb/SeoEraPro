<?php

namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;


class AddUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Users =  User::where('usertype', 'user')->latest()->paginate(3);
        return view('admin.users', compact('Users'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'mobile' => ['required', 'numeric', 'digits:11'],
            'password' => ['required'],
        ]);

        $New_User = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'email_verified_at' => now(),
            'password' => Hash::make($request->password),

        ]);


        event(new Registered($New_User));
        toastr()->closeButton()->timeOut(5000)->addSuccess($New_User->name . " " . ' Added Successfully.');
        return redirect(route('view_users'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit_user = User::find($id);

        return view('admin.edit_user', compact('edit_user'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {


        $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
        'mobile' => ['required', 'numeric', 'digits:11'],
        ]);


        $update_user = User::find($id);
        $update_user->name = $request->name;
        $update_user->email = $request->email;
        $update_user->mobile = $request->mobile;


        $update_user->save();
       toastr()->closeButton()->timeOut(5000)->addSuccess($update_user->name . " " . ' Updated Successfully.');
        return redirect(route('view_users'));

    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id , string $name)
    {
        $delete_user =  User::find($id)->delete();

        toastr()->closeButton()->timeOut(5000)->addSuccess($name . " " . ' Deleted Successfully.');

        return redirect()->back();
    }
}
