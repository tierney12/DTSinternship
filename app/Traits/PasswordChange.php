<?php

namespace App\Traits;

use App\Http\Requests\ChangePasswordRequest;

trait PasswordChange
{
    public function password()
    {
        return view('admin.settings.users.password');
    }

    public function passwordChange(ChangePasswordRequest $request)
    {
        $user = \Auth::user();

        $password = $request->input('password');
        $user->update([
            'password' => bcrypt($password),
        ]);

        return redirect(route('dashboard', [], false))->with('success', 'Password changed successfully.');
    }
}
