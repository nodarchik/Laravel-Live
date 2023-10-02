<?php

namespace App\Repositories;

use App\Interfaces\WalletRepositoryInterface;
use App\Models\Wallet;

class WalletRepository implements WalletRepositoryInterface
{
    public function getWalletsByUserId(int $userId)
    {
        return Wallet::with('currency')
            ->where('user_id', $userId)
            ->get()
            ->map(function($wallet) {
                return [
                    'currency' => $wallet->currency->name,
                    'amount' => $wallet->amount
                ];
            });
    }
}
