<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getAllUsersWithWallets()
    {
        return User::with('wallets.currency')->get();
    }
}
