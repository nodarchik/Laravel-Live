<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'photo',
    ];

    /**
     * Get the wallets for the user.
     *
     * @return HasMany
     */
    public function wallets(): HasMany
    {
        return $this->hasMany(Wallet::class);
    }
}
