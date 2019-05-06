<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Contracts\Provider;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthFacebookController extends Controller
{
    /**
     * Create a redirect method to facebook api.
     *
     * @param $provider
     * @return void
     */
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {

        $user = $this->createOrGetUser(Socialite::driver($provider));

        auth()->login($user);

        return redirect()->to('/home');
    }

    private function createOrGetUser(Provider $provider)
    {

//        $providerUser = $provider->user();
        $providerUser = $provider->stateless()->user();

        $providerName = class_basename($provider);

        $user = User::whereProvider($providerName)
            ->whereProviderId($providerUser->getId())
            ->first();

        if (!$user) {
            $checkEmail = User::where('email',$providerUser->getEmail())->first();
            if ($checkEmail){
                return $checkEmail;
            }

            $user = User::create([
                'email' => $providerUser->getEmail(),
                'name' => $providerUser->getName(),
//                'avatar' => $providerUser->getAvatar(),
                'provider_id' => $providerUser->getId(),
                'provider' => $providerName
            ]);
        }

        return $user;
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
