<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
  public function user(){
    return $this->belongsTo(User::class);
  }
  public function currency(){
    return $this->belongsTo(Currency::class);
  }
}
