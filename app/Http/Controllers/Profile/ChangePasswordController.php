<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function index()
    {
        return view('admin.profile.change-password');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'oldPassword' => ['required', new MatchOldPassword],
            'newPassword' => ['required'],
            'confirmPassword' => ['same:newPassword']
        ]);
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($data['newPassword'])
        ]);
        return redirect()->route('admin.dashboard');
    }
}
