<?php

namespace App\Repositories;

use App\User;

class UserRepository {
    public function findByUserNameOrCreate($userData) {
        $user = User::where('provider_id', '=', $userData->id)->first();
        if(!$user) {
            $user = User::create([
                'provider_id' => $userData->id,
                'first_name' => $userData->user['first_name'],
                'last_name' => $userData->user['last_name'],
                'gender' => $userData->user['gender'],
                'username' => $userData->nickname,
                'email' => $userData->email,
                'avatar' => $userData->avatar,
                'active' => 1,
            ]);
        }

        $this->checkIfUserNeedsUpdating($userData, $user);
        return $user;
    }

    public function checkIfUserNeedsUpdating($userData, $user) {

        $socialData = [
            'avatar' => $userData->avatar,
            'email' => $userData->email,
            'first_name' => $userData->user['first_name'],
            'last_name' => $userData->user['last_name'],
            'username' => $userData->nickname,
        ];
        $dbData = [
            'avatar' => $user->avatar,
            'email' => $user->email,
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'username' => $user->username,
        ];

        if (!empty(array_diff($socialData, $dbData))) {
            $user->avatar = $userData->avatar;
            $user->email = $userData->email;
            $user->first_name = $userData->user['first_name'];
            $user->last_name = $userData->user['last_name'];
            $user->username = $userData->nickname;
            $user->save();
        }
    }
}
