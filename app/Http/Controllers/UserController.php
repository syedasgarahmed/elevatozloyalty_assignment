<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function showCreateAccount()
    {
        return view('create-account');
    }

    //store user data
    public function storeAccount(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'mobile_no' => 'required|numeric|unique:users',
            'password' => 'required|min:8',
        ]);

        // Create the user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'mobile_no' => $validated['mobile_no'],
            'pwd' => Hash::make($validated['password']), // Hash the password
        ]);

        // Log in the user
        Auth::login($user);

        // Redirect to the user dashboard
        return redirect()->route('user.dashboard');
    }


    public function dashboard()
    {
        return view('user.dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Logged out successfully.');
    }




    public function showValidateAccount()
    {
        return view('validate-account');
    }
    //validation code
    public function validateAccount(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|exists:users,email',
            'pwd' => 'required',
        ]);

        $user = User::where('email', $validated['email'])->first();
        if ($user && Hash::check($validated['pwd'], $user->pwd)) {

            // Log in the user
            Auth::login($user);

            // Redirect to the user dashboard
            return redirect()->route('user.dashboard');

            // return redirect()->back()->with('success', 'Validation successful!');
        }
        // Redirect back with an error message
        return redirect()->back()->with('error', 'Invalid credentials');
    }



    //to show profile information
    public function showProfile()
    {
        $user = Auth::user();  // Get the authenticated user
        $address = $user->address;  // Get the associated address

        return view('user.profile', compact('user', 'address'));
    }


    public function editProfile()
    {
        $user = Auth::user();  // Get the authenticated user
        $address = $user->address;  // Get the associated address

        return view('user.edit-profile', compact('user', 'address'));
    }

    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'mobile_no' => 'required|numeric',
            'address_1' => 'required|string|max:255',
            'address_2' => 'nullable|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'pincode' => 'required|string|max:6',
        ]);
    
        $user = Auth::user();
        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'mobile_no' => $validated['mobile_no'],
        ]);
    
        // Update address if it exists
        if ($user->address) {
            $user->address->update([
                'address_1' => $validated['address_1'],
                'address_2' => $validated['address_2'],
                'city' => $validated['city'],
                'state' => $validated['state'],
                'pincode' => $validated['pincode'],
            ]);
        } else {
            // Create a new address if none exists
            $user->address()->create([
                'address_1' => $validated['address_1'],
                'address_2' => $validated['address_2'],
                'city' => $validated['city'],
                'state' => $validated['state'],
                'pincode' => $validated['pincode'],
            ]);
        }
    
        return redirect()->route('my-profile')->with('success', 'Profile updated successfully!');
    }
    

    public function getProfile($id)
    {
        $user = User::with('addresses')->find($id);

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json(['user' => $user], 200);
    }
}
