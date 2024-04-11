<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Teach extends Model
{
    use HasFactory;

  public function teachers(): HasOne{

    return $this->hasOne('Teacher'::class);
  }

  public function subjects(): HasMany{

    return $this->hasMany('Subjects'::class);
  }

  function teachs($teach) {
    $teach= Teach::create([
    'name' => 'Ricardo Amorim',
    'rg' => '123456789',
    ]);
  }
}