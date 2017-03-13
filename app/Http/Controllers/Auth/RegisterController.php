<?php

namespace App\Http\Controllers\Auth;

use App\SocialProvider;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Laravel\Socialite\Facades\Socialite;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|max:191',
            'last_name' => 'required|max:191',
            'email' => 'required|email|max:191|unique:users',
            'date_of_birth' => 'required|date',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'date_of_birth' => $data['date_of_birth'],
            'password' => bcrypt($data['password']),
        ]);
    }
    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        try{
           $socialUser= Socialite::driver($provider)->user();
        }
        catch(\Exception $e)
        {
            return redirect('/');
        }
        $socialProvider = SocialProvider::where('provider_id',$socialUser->getId())->get()->first();
        if(!$socialProvider)
        {
            $user = User::where('email',$socialUser->getEmail())->get()->first();
            if(!$user)
            {
                $user = User::create([
                    'email' => $socialUser->getEmail(),
                    'first_name' => $this->getFirstName($socialUser->getName()),
                    'last_name' => $this->getLastName($socialUser->getName()),
                    'date_of_birth' => '0000-00-00',
                    'verified' => true
                ]);
            }
            SocialProvider::create([
                'user_id'=>$user->id,
                'provider_id' =>$socialUser->getId(),
                'provider' => $provider
            ]);
        }
        else
        {
            $user = User::where('email',$socialUser->getEmail())->get()->first();
        }


        auth()->login($user);

        return redirect()->route('home');
    }


    function getFirstName($name) {
        return implode(' ', array_slice(explode(' ', $name), 0, -1));
    }

    function getLastName($name) {
        return array_slice(explode(' ', $name), -1)[0];
    }


}
