<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;
use App\Models\User;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model; // Move this line up to the correct position
use Illuminate\Support\Facades\Hash; // Move this line up to the correct position

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.all', compact('users'));


    }

    public function viewOrder($id)
    {
        $orders = Orders::where('id', $id)->where('user_id', Auth::id())->get();
        return view('shop.orders.view', compact('orders'));
    }


    //users
    public function users()
    {
        $users = User::all();
        return view('admin.user.all', compact('users'));
    }

    //deleteUser
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('status', 'User Deleted successfully.');

    }
    //updateUser view
    public function updateUser($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    //profileupdate
    public function profileUpdate(Request $request)
{
    $user = Auth::user();

    // Validate the request data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'phone' => 'nullable|string|max:15',
        'address' => 'nullable|string|max:255',
    ]);

    // Update the user data
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone ?? '';
    $user->address = $request->address ?? '';
    $user->save();

    return redirect()->back()->with('status', 'Profile updated successfully.');
}
//adduser
public function create()
    {
        //all user
        $user = User::all();
        return view('admin.user.create', compact('user'));
    }
    //store
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|max:255',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('user.index')->with('success', 'User created successfully');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required|string|max:255',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->role = $request->role;
        $user->save();
        return redirect()->back()->with('success', 'User updated successfully.');

    }

    public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->back()->with('success', 'User deleted successfully.');

}



}
