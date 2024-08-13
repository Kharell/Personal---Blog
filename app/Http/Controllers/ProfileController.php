<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $profile = $user->profile; // Mengambil profil pengguna
        return view('profile.show', compact('user', 'profile'));
    }

    public function edit()
    {
        $user = Auth::user();
        $profile = $user->profile; // Mengambil profil pengguna
        return view('profile.edit', compact('user', 'profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
            'bio' => 'nullable|string',
            'password' => 'nullable|string|min:8|confirmed',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->username = $request->username;

        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        $profile = $user->profile ?: new Profile();
        $profile->bio = $request->bio;

        if ($request->hasFile('photo')) {
            // Delete old photo if exists
            if ($profile->photo) {
                Storage::delete('public/profile_photos/' . $profile->photo);
            }

            // Store new photo
            $photoPath = $request->file('photo')->store('profile_photos', 'public');
            $profile->photo = basename($photoPath);
        }

        $profile->user_id = $user->id;
        $profile->save();

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
    }
}
