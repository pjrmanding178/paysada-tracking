<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\FirebaseService;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Session;



class AuthController extends Controller
{
    protected $firebase;

    public function __construct(FirebaseService $firebase)
    {
        $this->firebase = $firebase;
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required','min:4'],
            'email' => ['required|email',Rule::unique('users', 'email')], 
            'password' => 'required|confirmed|min:6'
            
        ]);

        try {
            $auth = $this->firebase->getAuth();
            $database = $this->firebase->getDatabase();

            $userProperties = [
                'email' => $request->email,
                'password' => $request->password,
                'displayName' => $request->name
            ];

            $createdUser = $auth->createUser($userProperties);

            // Store user details in the Realtime Database
            $database->getReference('users/'.$createdUser->uid)->set([
                'name' => $request->name,
                'email' => $request->email,
                'created_at' => now()
            ]);

            return redirect()->route('login')->with('success', 'Account registered successfully.');
        } catch (\Exception $e) {
            return back()->withErrors(['registration' => 'Failed to register. Please try again.']);
        }
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        try {
            $auth = $this->firebase->getAuth();
            $signInResult = $auth->signInWithEmailAndPassword($request->email, $request->password);
            Session::put('firebaseUser', $signInResult->firebaseUserId());

            return redirect()->route('login');
        } catch (\Exception $e) {
            return back()->withErrors(['login' => 'Invalid credentials.']);
        }
    }

    public function logout()
    {
        Session::forget('firebaseUser');
        return redirect()->route('login');
    }
}
