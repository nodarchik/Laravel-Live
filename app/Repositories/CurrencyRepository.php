<?php

namespace App\Repositories;

use App\Interfaces\CurrencyRepositoryInterface;
use App\Models\Currency;

class CurrencyRepository implements CurrencyRepositoryInterface
{
    public function getAllCurrencies()
    {
        return Currency::all();
    }
}
