<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\User;
use App\Models\Team;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
     public function handleGoogleCallback()
    {
        try {
            //create a user using socialite driver google
            $user = Socialite::driver('google')->user();
            // if the user exits, use that user and login
            $finduser = User::where('email', $user->email)->first();
            if($finduser){
                //if the user exists, login and show dashboard
                Auth::login($finduser);
                return redirect('/home');
            }else{
                //user is not yet created, so create first
                $newUser = User::create([
                    'names' => $user->name,
                    'email' => $user->email,
                    'firstname' => '',
                    'lastname' => '',
                    'google_id'=> $user->id,
                    'password' => encrypt('')
                ]);
                //every user needs a team for dashboard/jetstream to work.
                // //create a personal team for the user
                // $newTeam = Team::forceCreate([
                //     'user_id' => $newUser->id,
                //     'names' => explode(' ', $user->name, 2)[0]."'s Team",
                //     'personal_team' => true,
                // ]);
                // save the team and add the team to the user.
                // $newTeam->save();
                // $newUser->current_team_id = $newTeam->id;
                $newUser->save();
                //login as the new user
                Auth::login($newUser);
                $newUser->assignRole('Encuestador');
                // go to the dashboard
                return redirect('/home');
            }
            //catch exceptions
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
