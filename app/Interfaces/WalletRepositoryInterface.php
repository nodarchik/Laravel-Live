<?php

namespace App\Interfaces;

interface WalletRepositoryInterface
{
    public function getWalletsByUserId(int $userId);
}
