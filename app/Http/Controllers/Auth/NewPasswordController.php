<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Models\User;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view for the given token.
     */
    public function create(Request $request, $token)
    {
        return view('admin.reset-password', ['token' => $token, 'email' => $request->email]);
    }

    /**
     * Reset the user's password.
     */
    public function store(Request $request): RedirectResponse
    {
        $user = auth()->user();

        // Validate the request inputs
        $validated = $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
            'current_password' => ['required', 'password'], // Custom rule for current password validation
        ], [
            'current_password.password' => 'The provided current password does not match.',
        ]);

        // Attempt to reset the password using Laravel's Password::reset()
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                // Update the user's password
                $user->password = Hash::make($password);
                $user->password_updated_at = now(); // Set the password_updated_at timestamp
                $user->save();
                
                // You can also dispatch an event here if needed
                event(new PasswordReset($user));
            }
        );

        // Check the reset status
        if ($status === Password::PASSWORD_RESET) {
            // Redirect with success message
            return redirect()->route('login')->with('status', 'password-updated');
        } else {
            // Handle validation or other errors
            return back()->withErrors(['email' => [__($status)]]);
        }
    }
}
