<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
<<<<<<< HEAD
            'username' => ['required', 'string', 'alpha_dash', 'min:3', 'max:50', 'unique:users,username'],
            'address' => ['required', 'string', 'min:5', 'max:500'],
            'phone' => ['required', 'string', 'regex:/^[0-9+()\- ]{7,30}$/'],
=======
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
<<<<<<< HEAD
            'username' => $input['username'],
            'address' => $input['address'],
            'phone' => $input['phone'],
=======
>>>>>>> 077a6826da1dee4eba4ffbee1435054103621528
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
