<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = $request->user();

        // Fill the user model with validated data
        $user->fill($request->validated());

        // Check if the email was changed, and if so, reset email verification status
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
            $user->sendEmailVerificationNotification(); // Send a new verification email
        }

        // Save the updated user information
        $user->save();

        // Return with a success message
        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Send an email verification notification to the user.
     */
    public function verifyEmail(Request $request): RedirectResponse
    {
        $user = $request->user();

        // If the user has already verified the email, return a message
        if ($user->hasVerifiedEmail()) {
            return Redirect::route('profile.edit')->with('status', 'Email already verified.');
        }

        // Send a verification link
        $user->sendEmailVerificationNotification();

        return Redirect::route('profile.edit')->with('status', 'Verification link sent!');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Validate the password to ensure user can delete the account
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        // Log the user out before deleting the account
        Auth::logout();

        // Delete the user
        $user->delete();

        // Invalidate the current session and regenerate the token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/')->with('status', 'Account deleted successfully.');
    }
}
